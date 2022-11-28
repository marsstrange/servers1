FROM php:7.2-apache
RUN apt-get update && apt-get -y install apache2-utils libaprutil1-dbd-mysql && a2enmod authn_dbd && docker-php-ext-install mysqli && docker-php-ext-enable mysqli && a2enmod rewrite
RUN pecl install redis-5.1.1 && docker-php-ext-enable redis