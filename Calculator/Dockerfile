FROM php:7.4-apache

COPY www/ /var/www/html/

RUN a2enmod rewrite

COPY example.conf /etc/apache2/sites-enabled/example.conf

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
