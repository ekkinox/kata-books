FROM php:7.1-fpm

RUN echo -e "\nexport TERM=xterm" >> ~/.bashrc

RUN apt-get update && \
    apt-get install -y libbz2-dev zlib1g-dev libmcrypt-dev \
     && \
     apt-get clean \
     && \
     rm -rf /var/lib/apt/lists/* \
     && \
     docker-php-ext-install mbstring mcrypt
