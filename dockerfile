FROM php:7.2-apache
COPY . /var/www/html/

EXPOSE 5000


RUN sed -ri -e 's!/var/www/html!/var/www/html/public/index.php!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!//var/www/html/public/index.php!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf