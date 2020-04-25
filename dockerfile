FROM php:7.2-apache
COPY . /var/www/site

RUN a2enmod rewrite

RUN docker-php-ext-install pdo pdo_mysql

ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf
