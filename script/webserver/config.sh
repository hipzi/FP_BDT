#!/bin/bash

# clone repository
cd /var/www/
sudo git clone https://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:x-oauth-basic@github.com/hipzi/FP_BDT.git

# change owner and permission for directory application 
sudo chown -R www-data:www-data /var/www/FP_BDT
sudo chmod -R 755 /var/www/FP_BDT

# config nginx
sudo echo '
server {
    listen 80;
    server_name _;

    root  /var/www/FP_BDT/public;
    index index.php index.html index.htm;

    location / {
        try_files $uri $uri/ /index.php$is_args$args;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php7.4-fpm.sock;
    }

    error_page 404 /index.php;

    # deny access to hidden files such as .htaccess
    location ~ /\. {
        deny all;
    }
}
'> /etc/nginx/sites-available/application

# link config nginx and verify syntax config nginx
sudo ln -s /etc/nginx/sites-available/application /etc/nginx/sites-enabled/
nginx -t

# restart nginx
sudo systemctl restart nginx

# migrate database
php spark migrate
php spark db:seed UserSeeder