<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="350" alt="Laravel Logo">
</p>

<h1 align="center">The Gilroy Bar and Eatery</h1>

<p align="center">
  A Laravel-based web application for managing the bar and eatery system.
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
  <a href="https://github.com/yourusername/the-gilroy-bar-and-eatery/stargazers"><img src="https://img.shields.io/github/stars/yourusername/the-gilroy-bar-and-eatery?style=social" alt="GitHub Stars"></a>
</p>

---

## 🚀 Features
- Modern Laravel framework
- Database migrations & seeders
- Storage symlink support
- Easy setup with artisan commands

---

## ⚙️ Installation

### 1. Clone or Extract the Project
```bash
git clone https://github.com/VireakGumi/the-gilroy-bar-and-eatery.git
cd the-gilroy-bar-and-eatery
composer install

# Set these variables:
cp .env.example .env

APP_NAME

APP_URL

DB_DATABASE, DB_USERNAME, DB_PASSWORD

# Cache configuration
php artisan optimize

# Generate application key
php artisan key:generate

# Cache configuration
php artisan optimize

# Run migrations & seeders
php artisan migrate --seed

# Create storage symlink
php artisan storage:link

# run the project
php artisan serve
