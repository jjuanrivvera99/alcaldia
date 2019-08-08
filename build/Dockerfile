FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive
ENV PHP_VERSION 7.2

RUN apt-get update -yqq && apt-get install -yq --no-install-recommends \
    apt-utils \
    apt-transport-https \
    curl \
    gnupg2 \
    wget \
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
    graphicsmagick \
    imagemagick \
    ghostscript \
    iputils-ping \
    locales \
    rlwrap \
    php-pear \
    make \
    cmake \
    unzip \
    zip \
    tar \
    ca-certificates \
    && apt-get clean

COPY ./oracle-client /tmp

# Install Oracle Client
RUN cd /opt &&\
    mkdir oracle &&\
    mv /tmp/instantclient* /opt/oracle/ &&\
    cd /opt/oracle/ &&\
    unzip instantclient-basic-linux.x64-12.2.0.1.0.zip &&\
    unzip instantclient-sqlplus-linux.x64-12.2.0.1.0.zip &&\
    unzip instantclient-sdk-linux.x64-12.2.0.1.0.zip &&\
    cd /opt/oracle/instantclient_12_2/ &&\
    ln -s libclntsh.so.12.1 libclntsh.so &&\
    echo "/opt/oracle/instantclient_12_2/" >> /etc/ld.so.conf.d/oracle.conf &&\
    ldconfig &&\
    echo 'export ORACLE_HOME=/opt/oracle' >> ~/.bashrc &&\
    echo 'export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/opt/oracle/instantclient_12_2' >> ~/.bashrc &&\
    echo 'PATH=$PATH:/opt/oracle/instantclient_12_2' >> ~/.bashrc &&\
    echo "alias sqlplus='/usr/bin/rlwrap -m /opt/oracle/instantclient_12_2/sqlplus'" >> ~/.bashrc &&\
    cd /opt/oracle &&\
    pecl download oci8 &&\
    tar -xzvf oci8*.tgz &&\
    cd oci8-2.2.0 &&\
    phpize &&\
    ./configure --with-oci8=instantclient,/opt/oracle/instantclient_12_2/ &&\
    make install &&\
    echo 'instantclient,/opt/oracle/instantclient_12_2' | pecl install oci8

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set locales
RUN locale-gen en_US.UTF-8 en_GB.UTF-8 de_DE.UTF-8 es_ES.UTF-8 fr_FR.UTF-8 it_IT.UTF-8 km_KH sv_SE.UTF-8 fi_FI.UTF-8

# Configure PHP for My Site
COPY my-site.ini /etc/php/7.2/mods-available/
RUN phpenmod my-site

# Configure apache for My Site
RUN a2enmod rewrite expires
RUN echo "ServerName localhost" | tee /etc/apache2/conf-available/servername.conf
RUN a2enconf servername

# Configure vhost for My Site
COPY my-site.conf /etc/apache2/sites-available/
RUN a2dissite 000-default
RUN a2ensite my-site.conf

# Copy helpers binaries
RUN mkdir /tmp/bin
COPY /bin/* /tmp/bin/
RUN chmod +x /tmp/bin/*
RUN mv /tmp/bin/* /bin/

EXPOSE 80 443

WORKDIR /var/www/

CMD apachectl -D FOREGROUND