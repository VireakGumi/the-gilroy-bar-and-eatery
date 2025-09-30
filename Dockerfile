# ---- Base PHP-FPM image ----
FROM php:8.3-fpm

# Workdir
WORKDIR /var/www

# ---- System dependencies ----
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libzip-dev unzip git curl \
    libonig-dev libicu-dev libpq-dev \
    && rm -rf /var/lib/apt/lists/*

# ---- PHP extensions ----
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql pdo_pgsql mbstring zip intl bcmath pcntl \
 && docker-php-ext-install opcache

# ---- Composer ----
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# -------------------------------
# Step 1: Install dependencies (cache friendly)
# -------------------------------
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-autoloader

# -------------------------------
# Step 2: Copy application code
# -------------------------------
COPY . .

# Run optimize-autoloader AFTER code exists
RUN composer dump-autoload --optimize

# ---- Permissions for Laravel ----
RUN install -d -m 775 -o www-data -g www-data storage bootstrap/cache \
 && chown -R www-data:www-data storage bootstrap/cache

# ---- Expose port for php-fpm ----
EXPOSE 9000
CMD ["php-fpm"]
