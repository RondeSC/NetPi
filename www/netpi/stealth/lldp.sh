#!/bin/bash

echo Waiting for LLDP Packet
dtstamp=$(date +"%m-%d-%Y--%H%M%S")
logfile=/var/log/netpi/lldp/report-$dtstamp.txt
flag=true
touch $logfile
sudo service lldpd restart
while ($flag); do
    if [[ ! $(grep "Interface" $logfile) ]]; then
        sleep 10
        lldpctl eth0 | tee $logfile
    else
        flag=false
    fi
done
sudo service lldpd stop
