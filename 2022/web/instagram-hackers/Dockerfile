FROM php:7.4-apache

RUN apt update -y
RUN apt install -y mariadb-server
#RUN apt install -y libzip-dev libjpeg62-turbo-dev libpng-dev libfreetype6-dev

# Install extensions

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

COPY src/ /var/www/html
WORKDIR /var/www/html

RUN a2enmod rewrite

EXPOSE 80

COPY entrypoint.sh /entrypoint.sh
ENTRYPOINT /entrypoint.sh
