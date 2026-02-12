FROM php:8.2-apache

# Install MySQL extension for PHP
RUN docker-php-ext-install mysqli

# Fix Apache warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Set working directory
WORKDIR /var/www/html

# Copy files
COPY . .

# Expose port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
