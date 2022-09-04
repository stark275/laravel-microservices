FROM php:8.1-fpm
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y \
                libfreetype6-dev \
                libjpeg62-turbo-dev \
                libpng-dev \
        && docker-php-ext-configure gd --with-freetype --with-jpeg \
        && docker-php-ext-install -j$(nproc) gd \
        && docker-php-ext-install pdo_mysql

# FROM php:7.4-fpm-alpine

# WORKDIR /var/www/html

# RUN docker-php-ext-install pdo pdo_mysql sockets

# RUN apk update && apk add libpng-dev

# RUN docker-php-ext-install gd