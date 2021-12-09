#!/bin/bash

# check status mysql
sudo systemctl status mysql

# setup mysql secure installation
sudo mysql_secure_installation <<EOF

y
root123
root123
y
y
y
y
EOF





