FROM php:8.1-fpm

# Gerekli bağımlılıkları yükleyelim
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-enable intl
FROM php:8.1-fpm

# Gerekli bağımlılıkları yükleyelim
RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-enable intl
