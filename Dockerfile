FROM php:8.1-apache

# Install ekstensi PHP yang dibutuhkan
RUN docker-php-ext-install mysqli

# Aktifkan mod_rewrite (penting untuk htaccess kalau dipakai)
RUN a2enmod rewrite

# Salin semua file dari folder src ke direktori kerja Apache
COPY src/ /var/www/html/

# Set permission folder
RUN chown -R www-data:www-data /var/www/html/

# Set working directory
WORKDIR /var/www/html