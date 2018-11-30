#!/bin/bash
mysql -uroot -pmypass -AN -e "STOP GROUP_REPLICATION; START GROUP_REPLICATION;"