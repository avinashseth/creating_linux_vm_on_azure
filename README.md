# Installing LAMP stack
## 1) Install Apache
> sudo apt-get update

> sudo apt-get install apache2

## 2) Install Mysql
> sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql

**libapache2-mod-auth-mysql** Apache 2 module for MySQL authentication

**php5-mysql** This package provides modules for MySQL database connections directly from PHP scripts.

> sudo mysql_install_db

> sudo /usr/bin/mysql_secure_installation

## 3) Install php
> sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt

**libapache2-mod-php5** This package provides the PHP5 module for the Apache 2 webserver 

**php5-mcrypt** This package provides a module for MCrypt functions in PHP scripts.

## 4) Install phpmyadmin(optional)

> sudo apt-get update

> sudo apt-get install phpmyadmin

> sudo php5enmod mcrypt

> sudo service apache2 restart



# Create public private key

> openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout filename.key -out filename.pem

# Permission for private key

> sudo chmod 600 filename.key

# SSH into VM

> ssh -i privatekey_filename.key username@cloudservice_name.cloudapp.net
