# Getting the official image
FROM php:8.1-apache

# Get composer to that dir
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Changing the Apache root like that because I was too lazy to create a new file and replace it
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Installing funky extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Docker package manager stuff
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip

# Restart the service
RUN service apache2 restart
