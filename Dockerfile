FROM php:8.2-fpm

# Instala dependencias
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite zip

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

COPY .env .env

# Instala las dependencias de Composer
RUN composer install --optimize-autoloader --no-dev

# Genera la clave de la aplicación
RUN php artisan key:generate

# Limpia la configuración de Laravel
RUN php artisan config:clear

# Expone el puerto para el servidor web
EXPOSE 8080

# Ejecuta el servidor de Laravel
CMD ["php-fpm"]
