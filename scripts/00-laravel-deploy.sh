#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --no-dev --working-dir=/var/www/html

echo "generating application key..."
APP_KEY=$(php artisan key:generate --show)
sed -i "s/APP_KEY=.*/APP_KEY=${APP_KEY}/" /var/www/html/.env

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force || true
