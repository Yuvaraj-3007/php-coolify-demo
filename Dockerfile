FROM php:8.2-apache

# Set ServerName to prevent Apache warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Set working directory
WORKDIR /var/www/html

# Copy files
COPY . .

# Ensure Apache listens on port 80
EXPOSE 80

# Start Apache explicitly
CMD ["apache2-foreground"]

