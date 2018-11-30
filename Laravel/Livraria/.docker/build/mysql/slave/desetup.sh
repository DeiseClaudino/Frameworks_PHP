#!/bin/bash
mysql -uroot -pmypass -AN -e "SET @@global.group_replication_exit_state_action=READ_ONLY; STOP GROUP_REPLICATION;"