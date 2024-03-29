FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive
ENV PHP_VERSION 7.2

RUN apt-get update -yqq && apt-get install -yq --no-install-recommends \
    apt-utils \
    apt-transport-https \
    gnupg2 \
    # Install git
    git \
    # Install apache
    apache2 \
    # Install php 7.2
    php$PHP_VERSION \
    libapache2-mod-php$PHP_VERSION \
    php$PHP_VERSION-cli \
    php$PHP_VERSION-json \
    php$PHP_VERSION-curl \
    php$PHP_VERSION-fpm \
    php$PHP_VERSION-dev \
    php$PHP_VERSION-gd \
    php$PHP_VERSION-ldap \
    php$PHP_VERSION-mbstring \
    php$PHP_VERSION-bcmath \
    php$PHP_VERSION-mongo \
    php$PHP_VERSION-sqlite3 \
    php$PHP_VERSION-xml \
    php$PHP_VERSION-zip \
    php$PHP_VERSION-intl \
    libldap2-dev \
    libaio1 \
    libaio-dev \
    # Install tools
    openssl \
    nano \
    g++ \
    make \
    curl \
    iputils-ping \
    locales \
    php-pear \
    ca-certificates \
    && apt-get clean

# SQL Server Setup
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - && \
    curl https://packages.microsoft.com/config/ubuntu/16.04/prod.list > /etc/apt/sources.list.d/mssql-release.list

RUN apt-get update && \
    ACCEPT_EULA=Y apt-get install -y msodbcsql17 mssql-tools && \
    apt-get install -y unixodbc-dev

RUN pecl install sqlsrv && \
    pecl install pdo_sqlsrv

RUN apt-get update && apt-get install software-properties-common -y && \
    add-apt-repository ppa:ubuntu-toolchain-r/test && \
    apt-get update

RUN apt-get install -y gcc && \
    apt-get upgrade -y libstdc++6

RUN apt-get install -y libssl1.0.0

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set locales
RUN locale-gen en_US.UTF-8 en_GB.UTF-8 de_DE.UTF-8 es_ES.UTF-8 es_CO.UTF-8 fr_FR.UTF-8 it_IT.UTF-8 km_KH sv_SE.UTF-8 fi_FI.UTF-8

COPY ./apache.conf /etc/apache2/apache2.conf

# Configure PHP for My Site
COPY my-site.ini /etc/php/$PHP_VERSION/mods-available/
RUN phpenmod my-site

# Configure apache for My Site
RUN a2enmod headers rewrite expires && \
    echo "ServerName localhost" | tee /etc/apache2/conf-available/servername.conf && \
    a2enconf servername

# Configure vhost for My Site
COPY my-site.conf /etc/apache2/sites-available/
RUN a2dissite 000-default && \
    a2ensite my-site.conf

# Copy helpers binaries
RUN mkdir /tmp/bin
COPY /bin/* /tmp/bin/
RUN chmod +x /tmp/bin/*
RUN mv /tmp/bin/* /bin/

EXPOSE 80 443

WORKDIR /var/www/

CMD apachectl -D FOREGROUND