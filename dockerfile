FROM php:7.2-apache
COPY . /var/www/site

RUN a2enmod rewrite

ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf
