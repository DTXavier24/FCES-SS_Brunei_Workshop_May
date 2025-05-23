FROM php:7.4-apache

COPY www/ /var/www/html/

RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
