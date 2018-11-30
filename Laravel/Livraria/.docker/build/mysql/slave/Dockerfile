FROM mysql/mysql-server:8.0.13

RUN echo "" >> /etc/my.cnf                                                                        && \
    echo "socket=/var/lib/mysql/mysql.sock" >> /etc/my.cnf                                        && \
    echo "default_authentication_plugin=mysql_native_password" >> /etc/my.cnf                     && \
    echo "bind-address=0.0.0.0" >> /etc/my.cnf                                                    && \
    echo "server-id=2" >> /etc/my.cnf                                                             && \
    echo "log-bin='mysql-bin-1.log'" >> /etc/my.cnf                                               && \
    echo "enforce-gtid-consistency='ON'" >> /etc/my.cnf                                           && \
    echo "log-slave-updates='ON'" >> /etc/my.cnf                                                  && \
    echo "gtid-mode='ON'" >> /etc/my.cnf                                                          && \
    echo "transaction-write-set-extraction='XXHASH64'" >> /etc/my.cnf                             && \
    echo "binlog-checksum='NONE'" >> /etc/my.cnf                                                  && \
    echo "master-info-repository='TABLE'" >> /etc/my.cnf                                          && \
    echo "relay-log-info-repository='TABLE'" >> /etc/my.cnf                                       && \
    echo "plugin-load='group_replication.so'" >> /etc/my.cnf                                      && \
    echo "relay-log-recovery='ON'" >> /etc/my.cnf                                                 && \
    echo "group-replication-start-on-boot='OFF'" >> /etc/my.cnf                                   && \
    echo "group-replication-group-name='aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee'" >> /etc/my.cnf     && \
    echo "group-replication-local-address='dbslave:33061'" >> /etc/my.cnf                         && \
    echo "group-replication-group-seeds='dbmaster:33061,dbslave:33061'" >> /etc/my.cnf            && \
    echo "loose-group-replication-single-primary-mode='ON'" >> /etc/my.cnf                        && \
    echo "loose-group-replication-enforce-update-everywhere-checks='OFF'" >> /etc/my.cnf

ADD ./scripts.sql /docker-entrypoint-initdb.d/scripts.sql

ADD ./desetup.sh /desetup.sh
ADD ./resetup.sh /resetup.sh

RUN chmod +x /desetup.sh /resetup.sh
