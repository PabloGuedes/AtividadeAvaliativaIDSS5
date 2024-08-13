# Usando a imagem oficial do PHP com Apache
FROM php:8.1-apache

# Instalando extensões do PHP necessárias
RUN docker-php-ext-install mysqli

# Copiando o código da aplicação para o diretório root do Apache
COPY src/ /var/www/html/

# Definir limites de recursos no contêiner (300MB de RAM e 1 core)
CMD ["apache2-foreground"]
