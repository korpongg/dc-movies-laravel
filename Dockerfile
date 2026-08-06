FROM php:8.1-cli

RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl

RUN docker-php-ext-install pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

ENV PORT=10000

CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=$PORT"]