#!/bin/bash

while ! mysql -hdbmaverickmaster -umasteruser -pmasterpass  -e ";" ; do
       read -p "waiting master ..."
       sleep 10
done

while ! mysql -hdbmaverickslave -uslaveuser -pslavepass  -e ";" ; do
       read -p "waiting slave ..."
       sleep 10
done

mysql -hdbmaverickmaster -umasteruser -pmasterpass -AN -e "SET @@GLOBAL.group_replication_bootstrap_group=1; CHANGE master to master_user='repl' for channel 'group_replication_recovery'; START GROUP_REPLICATION;SET @@GLOBAL.group_replication_bootstrap_group=0;"
sleep 4
mysql -hdbmaverickslave -uslaveuser -pslavepass -AN -e "CHANGE master to master_user='repl' for channel 'group_replication_recovery';START GROUP_REPLICATION;"
