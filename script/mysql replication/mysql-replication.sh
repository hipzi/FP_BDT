#!/bin/bash

MASTER_HOST=10.0.0.51
SLAVE_HOST=10.0.0.165
MYSQL_ROOT_USER=root
MYSQL_ROOT_PASSWORD=root123
MYSQL_USER_REPLICA=replica
MYSQL_USER_PASSWORD_REPLICA=replica123

mysql -h $MASTER_HOST "-u$MYSQL_ROOT_USER" "-p$MYSQL_ROOT_PASSWORD" <<-EOSQL &
	GRANT REPLICATION SLAVE ON *.* TO '$MYSQL_USER_REPLICA'@'$SLAVE_HOST' IDENTIFIED BY '$MYSQL_USER_PASSWORD_REPLICA';
	FLUSH PRIVILEGES;
EOSQL

MASTER_STATUS=$(mysql -h $MASTER_HOST "-u$MYSQL_ROOT_USER" "-p$MYSQL_ROOT_PASSWORD" -e "SHOW MASTER STATUS;" | awk 'FNR == 2 {print $1 " " $2}')
LOG_FILE=$(echo $MASTER_STATUS | cut -f1 -d ' ')
LOG_POS=$(echo $MASTER_STATUS | cut -f2 -d ' ')

# Setting up slave replication"
mysql -h $SLAVE_HOST "-u$MYSQL_ROOT_USER" "-p$MYSQL_ROOT_PASSWORD" <<-EOSQL &
    STOP SLAVE;
    CHANGE MASTER TO MASTER_HOST='$MASTER_HOST',
    MASTER_USER='$MYSQL_USER_REPLICA',
    MASTER_PASSWORD='$MYSQL_USER_PASSWORD_REPLICA',
    MASTER_LOG_FILE='$LOG_FILE',
    MASTER_LOG_POS=$LOG_POS;
    START SLAVE;
EOSQL
# Wait for slave to get started and have the correct status
sleep 2
# Check if replication status is OK
SLAVE_OK=$(mysql -h $SLAVE_HOST "-u$MYSQL_ROOT_USER" "-p$MYSQL_ROOT_PASSWORD" -e "SHOW SLAVE STATUS\G;" | grep 'Waiting for master')
if [ -z "$SLAVE_OK" ]; then
    echo "Error ! Wrong slave IO state."
else
    echo "Slave IO state OK"
fi
