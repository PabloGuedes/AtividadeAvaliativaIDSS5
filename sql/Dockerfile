FROM php:8.1-apache

ENV MYSQL_ROOT_PASSWORD=senha_da_nasa
ENV MYSQL_DATABASE=atividadeavaliativaidss5

COPY ./products.sql /docker-entrypoint-initdb.b/

EXPOSE 3306