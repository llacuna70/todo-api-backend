FROM php:8.1-apache

# Copy all files to Apache web root
COPY . /var/www/html/

# Enable CORS if needed via .htaccess or headers inside PHP
