#!/bin/bash

# install dependency
sudo apt-get update -y
sudo apt-get install git -y

# install nginx
sudo apt-get install nginx -y

# start and enable nginx
sudo systemctl start nginx
sudo systemctl enable nginx

# check nginx version
nginx -v

# install php and extensions
sudo apt-get install php7.4 php7.4-fpm php7.4-cli php7.4-mysql php7.4-curl php7.4-json -y

# check php version
php --version

# start and enable php-fpm
sudo systemctl start php7.4-fpm
sudo systemctl enable php7.4-fpm

