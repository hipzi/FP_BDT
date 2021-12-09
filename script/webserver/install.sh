#!/bin/bash

# install dependency
sudo apt-get update -y
sudo apt-get install git -y
sudo apt-get install curl -y
sudo apt-get install unzip -y

# install nginx
sudo apt-get install nginx -y

# start and enable nginx
sudo systemctl start nginx
sudo systemctl enable nginx

# check nginx version
nginx -v

# install php and extensions
sudo apt-get install php7.4 php7.4-fpm php7.4-cli php7.4-mysql php7.4-curl php7.4-json php7.4-mbstring -y

# check php version
php --version

# start and enable php-fpm
sudo systemctl start php7.4-fpm
sudo systemctl enable php7.4-fpm

# install composer
curl -sS https://getcomposer.org/installer -o composer-setup.php
HASH=544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061
php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

# install composer globally
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# check composer
composer