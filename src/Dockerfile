FROM php:8-apache

ENV ENVIRONMENT="production"

RUN docker-php-ext-install mysqli pdo_mysql \
  && docker-php-ext-enable mysqli pdo_mysql
RUN a2enmod rewrite

COPY . /var/www/html
