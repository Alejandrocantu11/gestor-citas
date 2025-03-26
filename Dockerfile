FROM php:8.2-cli

# Instala dependencias
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl sqlite3 libsqlite3-dev

RUN docker-php-ext-install pdo pdo_sqlite zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --optimize-autoloader --no-dev
RUN php artisan key:generate
RUN php artisan config:clear

CMD php artisan serve --host=0.0.0.0 --port=8080
