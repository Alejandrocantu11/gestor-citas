#!/bin/bash

composer install --no-interaction --prefer-dist --optimize-autoloader
php artisan key:generate
php artisan migrate --force
php artisan serve --host=0.0.0.0 --port=$PORT

