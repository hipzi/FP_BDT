#!/bin/bash

# restart redis
sudo systemctl restart redis

# run sentinel 
sudo redis-server /etc/redis/sentinel.conf --sentinel

# add systemd sentinel.service
echo '
[Unit]
Description=Sentinel for Redis
After=network.target

[Service]
Type=forking
User=redis
Group=redis
PIDFile=/var/run/redis/sentinel.pid
ExecStart=/usr/bin/redis-server /etc/redis/sentinel.conf --sentinel
ExecStop=/bin/kill -s TERM $MAINPID
Restart=always

[Install]
WantedBy=multi-user.target
' > /etc/systemd/system/sentinel.service

sleep 2

# change owner and file permission
sudo chown redis:redis /etc/redis/sentinel.conf
sudo chown redis:redis /var/log/redis/sentinel.log
sudo chmod 640 /etc/redis/sentinel.conf
sudo chmod 660 /var/log/redis/sentinel.log

# reload daemon and enable systemd sentinel.service
sudo systemctl daemon-reload
sudo systemctl enable sentinel.service

sleep 5 

# start sentinel
sudo systemctl start sentinel

sleep 2

# check replication status
redis-cli info replication | grep role