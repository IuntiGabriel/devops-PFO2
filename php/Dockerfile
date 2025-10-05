# Imagen base con PHP-FPM (intérprete de PHP)
FROM php:8.2-fpm

# Instala extensión MySQLi para conectar con MySQL
RUN docker-php-ext-install mysqli

# Define la carpeta donde vivirá la aplicación
WORKDIR /var/www/html

# Copia el código fuente al contenedor
COPY ./src /var/www/html
