#!/usr/bin/env bash
set -euo pipefail

# ==============================
# Usage:
#   ./deploy.sh production
#   ./deploy.sh staging
# ==============================

ENVIRONMENT="${1:-}"
if [[ -z "$ENVIRONMENT" ]]; then
  echo "❌ Environment not specified. Usage: ./deploy.sh [production|staging]"
  exit 1
fi

APP_DIR="/www/wwwroot/dev-gilroy-repo"
BASE_IMAGE_NAME="ghcr.io/vireakgumi/the-gilroy-bar-and-eatery"
GITHUB_USER="${GITHUB_USER:-VireakGumi}"
GHCR_TOKEN="${GHCR_TOKEN:-}"

# Because production and staging use the same file names
COMPOSE_FILE="docker-compose.yml"

if [[ "$ENVIRONMENT" == "production" ]]; then
  IMAGE_TAG="prod-latest"
elif [[ "$ENVIRONMENT" == "staging" ]]; then
  IMAGE_TAG="staging-latest"
else
  echo "❌ Invalid environment: $ENVIRONMENT"
  echo "Valid options: production, staging"
  exit 1
fi

FULL_IMAGE_NAME="${BASE_IMAGE_NAME}:${IMAGE_TAG}"

cd "$APP_DIR"
echo "==> Deploying ibf-product-engine ($ENVIRONMENT)"

# 🔑 Authenticate with GHCR
if [[ -z "$GHCR_TOKEN" ]]; then
  echo "❌ GHCR_TOKEN not set!"
  exit 1
fi
echo "$GHCR_TOKEN" | docker login ghcr.io -u "$GITHUB_USER" --password-stdin

# 📦 Pull latest image
echo "==> Pulling latest $FULL_IMAGE_NAME"
docker pull "$FULL_IMAGE_NAME"

# 🗑️ Stop containers & reset
echo "==> Resetting containers"
docker compose -f "$COMPOSE_FILE" down

# 🚀 Start fresh containers
echo "==> Starting containers ($COMPOSE_FILE)"
docker compose -f "$COMPOSE_FILE" up -d --remove-orphans --force-recreate

# 🛠️ Fix Laravel storage/cache permissions
echo "==> Fixing Laravel permissions"
docker compose -f "$COMPOSE_FILE" exec -T app bash -lc '
  mkdir -p storage/logs bootstrap/cache storage/framework/{cache,sessions,views}
  touch storage/logs/laravel.log
  chown -R www-data:www-data storage bootstrap/cache storage/framework
  chmod -R 775 storage bootstrap/cache storage/framework
  chmod 664 storage/logs/laravel.log
'

# 🔄 Clear & rebuild Laravel caches
echo "==> Clearing Laravel caches"
docker compose -f "$COMPOSE_FILE" exec -T app php artisan optimize:clear || true
docker compose -f "$COMPOSE_FILE" exec -T app php artisan config:clear || true
docker compose -f "$COMPOSE_FILE" exec -T app php artisan route:clear || true
docker compose -f "$COMPOSE_FILE" exec -T app php artisan view:clear || true

echo "==> Rebuilding Laravel caches"
docker compose -f "$COMPOSE_FILE" exec -T app php artisan config:cache || true
docker compose -f "$COMPOSE_FILE" exec -T app php artisan route:cache || true
docker compose -f "$COMPOSE_FILE" exec -T app php artisan optimize || true

# 🗄️ Run migrations
echo "==> Running migrations"
docker compose -f "$COMPOSE_FILE" exec -T app php artisan migrate --force || echo "⚠️ Migration skipped"

# 🔐 Ensure Passport keys exist
if ! docker compose -f "$COMPOSE_FILE" exec -T app test -f storage/oauth-private.key; then
  echo "==> Passport keys missing, regenerating..."
  docker compose -f "$COMPOSE_FILE" exec -T app php artisan passport:keys --force
fi

# 🔐 Fix Passport key permissions
echo "==> Fixing Passport key permissions"
docker compose -f "$COMPOSE_FILE" exec -T app bash -lc '
  if [ -f storage/oauth-private.key ] && [ -f storage/oauth-public.key ]; then
    chown www-data:www-data storage/oauth-*.key
    chmod 600 storage/oauth-private.key
    chmod 644 storage/oauth-public.key
  fi
'

# 🔄 Restart Laravel services
echo "==> Restarting app, queue, scheduler"
docker compose -f "$COMPOSE_FILE" restart app queue-worker scheduler

# ✅ Final status
docker compose -f "$COMPOSE_FILE" ps
echo "✅ Deployment complete ($ENVIRONMENT)"
