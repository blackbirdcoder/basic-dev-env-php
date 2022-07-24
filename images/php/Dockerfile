FROM php:7.4-fpm

WORKDIR /var/www/html
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libzip-dev \
        libicu-dev \
        npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip intl mysqli pdo_mysql \
    && docker-php-ext-enable mysqli
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN pecl install xdebug && docker-php-ext-enable xdebug
EXPOSE 9000
CMD ["php-fpm"]