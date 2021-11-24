FROM php:8-apache

ENV ENVIRONMENT="production"

RUN apt-get update \
  && apt-get install -y libicu-dev \
  && docker-php-ext-configure intl

RUN docker-php-ext-install mysqli pdo_mysql intl\
  && docker-php-ext-enable mysqli pdo_mysql
RUN a2enmod rewrite

COPY . /var/www/html
