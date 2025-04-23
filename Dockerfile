FROM php:8.2-apache

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy project files into the container
COPY . /var/www/html/

EXPOSE 80