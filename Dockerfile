FROM php:8.1-apache

# Instala o Dockerize para esperar o MySQL estar pronto
RUN apt-get update && apt-get install -y wget
RUN wget https://github.com/jwilder/dockerize/releases/download/v0.6.1/dockerize-linux-amd64-v0.6.1.tar.gz
RUN tar -C /usr/local/bin -xzvf dockerize-linux-amd64-v0.6.1.tar.gz
RUN rm dockerize-linux-amd64-v0.6.1.tar.gz

# Instala extensões necessárias
RUN docker-php-ext-install mysqli

# Copia o código-fonte para a pasta web
COPY src/ /var/www/html/
