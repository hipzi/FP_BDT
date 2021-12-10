# config mysql master
sudo nano /etc/mysql/mysql.conf.d/mysqld.cnf

[mysqld]
bind-address	= 0.0.0.0
server-id       = 1
log_bin         = /var/log/mysql/mysql-bin.log

# remove auto.cnf
sudo rm -f /var/lib/mysql/auto.cnf

# restart mysql master
sudo systemctl restart mysql

# config mysql slave
sudo nano /etc/mysql/mysql.conf.d/mysqld.cnf

[mysqld]
bind-address	= 0.0.0.0
server-id       = 2
log_bin         = /var/log/mysql/mysql-bin.log

# restart mysql slave
sudo systemctl restart mysql

