FROM php:8.0-apache

WORKDIR /var/www/html

COPY ./app .

COPY example.conf /etc/apache2/sites-enabled/example.conf

RUN a2enmod rewrite

RUN service apache2 restart
