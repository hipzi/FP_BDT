#!/bin/bash 

MASTER_HOST=10.0.0.115
SLAVE_HOST=10.0.0.155
MYSQL_ROOT_USER=root
MYSQL_ROOT_PASSWORD=root123
MYSQL_USER=applicationuser
MYSQL_USER_PASSWORD=Application123*

Q1="GRANT ALL ON *.* TO '$MYSQL_ROOT_USER'@'$MASTER_HOST' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD' WITH GRANT OPTION;"
Q2="GRANT ALL ON *.* TO '$MYSQL_ROOT_USER'@'$SLAVE_HOST' IDENTIFIED BY '$MYSQL_ROOT_PASSWORD' WITH GRANT OPTION;"
Q3="GRANT ALL ON *.* TO '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_USER_PASSWORD' WITH GRANT OPTION;"
Q4="FLUSH PRIVILEGES;"
SQL="${Q1}${Q2}${Q3}${Q4}"

mysql -u$MYSQL_ROOT_USER -p$MYSQL_ROOT_PASSWORD -e "$SQL"