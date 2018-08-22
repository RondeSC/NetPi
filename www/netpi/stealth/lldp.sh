#!/bin/bash

echo Waiting for LLDP Packet
dtstamp=$(date +"%m-%d-%Y--%H%M%S")
logfile=/var/log/netpi/lldp/report-$dtstamp.txt
touch $logfile
#sudo service lldpd restart  #instead (once) on cli: sudo lldpd -r&
if [ $(ps aux |grep lldpd|grep -v grep|wc -l) -eq 0 ]; then
  export DISPLAY=':0.0'
  gksu -u pi "sudo lldpd -r &"  # will ask for root PW give it pi's
  exit	# gets some warnings ... should be good next time
fi

sleep 2
lldpctl eth0 | tee $logfile

#sudo service lldpd stop
