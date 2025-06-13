    FROM php:8.1-fpm

    RUN apt update && apt install -q -y libpq-dev \
        && docker-php-ext-install pdo pdo_pgsql pgsql