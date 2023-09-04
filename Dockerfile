#Setting php base Image.
FROM php:8.0-apache
# Installing mysqli for connecting php backend to mysql.

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

COPY . /var/www/html/useraccounts