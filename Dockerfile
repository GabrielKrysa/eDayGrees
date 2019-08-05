FROM ubuntu

ENV https_proxy=http://kcelestino:123456@proxy.unicentro.br:8080
ENV http_proxy=http://kcelestino:123456@proxy.unicentro.br:8080

RUN apt-get update
RUN apt-get install -y software-properties-common
RUN add-apt-repository -y ppa:ondrej/php
RUN apt-get update
RUN apt-get install -y php7.1 php7.1-fpm libapache2-mod-php7.0 php7.1-cli php7.1-curl php7.1-mysql php7.1-sqlite3 php7.1-gd php7.1-xml php7.1-mcrypt php7.1-mbstring php7.1-iconv | 2
RUN apt-get install -y git curl wget zip unzip
RUN apt-get install -y curl
RUN apt-get install -y apache2
RUN apt-get install -y mysql-server
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chown -R $USER $HOME/.composer

COPY . /app

RUN sudo chmod -R 777 /app

