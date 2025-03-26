#!/bin/bash
composer install
php artisan key:generate
php artisan migrate --force
php artisan serve --host=0.0.0.0 --port=$PORT
