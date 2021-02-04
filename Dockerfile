FROM php:7.4-buster
COPY . /usr/src/app
WORKDIR /usr/src/app
RUN apt-get update
RUN apt-get install -y git && apt-get install zip unzip
RUN php phar/composer.phar install -n
RUN php artisan config:cache
RUN php artisan cache:clear
WORKDIR /usr/src/app/public
CMD ["php","-S" ,"0.0.0.0:5001"]