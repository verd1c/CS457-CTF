FROM php:7.4-apache

RUN apt update -y

RUN apt install -y libzip-dev libjpeg62-turbo-dev libpng-dev libfreetype6-dev

COPY src/ /var/www/html
WORKDIR /var/www/html

RUN a2enmod rewrite