#!/bin/bash

echo Waiting for CDP Packet on ETH0
dtstamp=$(date +"%m-%d-%Y--%H%M%S")
#sudo cdpr -d eth0 -v | tee /var/log/netpi/cdp-report-$dtstamp.txt
cdpr -t 65 -d eth0 -v |& tee /var/log/netpi/cdp/report-$dtstamp.txt
#RESULT=$(sudo cat /var/log/netpi/cdp-report-$dtstamp.txt)
