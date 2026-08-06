FROM php:8.1-cli

RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libpq-dev

RUN docker-php-ext-install pdo_mysql pdo_pgsql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=$PORT