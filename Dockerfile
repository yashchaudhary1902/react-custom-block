# Use the official PHP image with Apache
FROM php:8.0-apache

# Install PHP extensions required by WordPress
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Set the working directory to /var/www/html (default for Apache)
WORKDIR /var/www/html

# Expose port 80 to access the Apache web server
EXPOSE 80

# Set up Apache to serve the WordPress application
CMD ["apache2-foreground"]
