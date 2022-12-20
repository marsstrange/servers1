FROM php:7.4-apache
RUN apt-get update && apt-get -y install apache2-utils libaprutil1-dbd-mysql && a2enmod authn_dbd && docker-php-ext-install mysqli && docker-php-ext-enable mysqli && a2enmod rewrite
RUN pecl install redis-5.1.1 && docker-php-ext-enable redis
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# unzip utility and libs needed by zip PHP extension 
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip


RUN apt-get install -y libwebp-dev libjpeg62-turbo-dev libpng-dev libxpm-dev 
RUN docker-php-ext-configure gd
RUN docker-php-ext-install gd
