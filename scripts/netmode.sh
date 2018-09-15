###
### Call process to Switch Network interface On / Off
### Stealth mode being ideal for CDP info without sending a MAC
### as to not trip any layer 2 security. Call with ./netmode [stealth|active]
### BlameTheNetwork.com/NetPi
###
#
### Define Interface to manage. Change if you do your testing over wireless.
nic="eth0"
###
### Switch output based on argument - all wallpaper commands intended for lxde env.
###
if [ $1 = "stealth" ]; then
	## Block all outgoing traffic on eth0
	echo "Killing traffic, going stealth..."
	sudo iptables -A OUTPUT -o eth0 -j DROP
	sudo service lldpd stop
	sudo pkill dhcli
	pcmanfm --set-wallpaper=/opt/NetPi/wallpaper/analyzestealthwallpaper.jpg --wallpaper-mode=fit
elif [ $1 = "active" ]; then
	## Allow all outgoing traffic on eth0
	echo "Going hot! talking on the net..."
	sudo iptables -D OUTPUT -o eth0 -j DROP
	sudo service lldpd restart &
	sudo dhclient eth0 &
	pcmanfm --set-wallpaper=/opt/NetPi/wallpaper/analyzeactivewallpaper.jpg --wallpaper-mode=fit
	#ToDo Here - load pen test toolset application. Update this...
elif [ $1 = "pentest" ]; then
	## Oh boy... heading to the dark side...
	echo "Switching to Pen Test software load..."
	sudo service lldpd start
	pcmanfm --set-wallpaper=/opt/NetPi/wallpaper/pentestwallpaper.jpg --wallpaper-mode=fit
else
	echo "Unknown or Undefined Action. Blocking Traffic out to be safe..."
	sudo iptables -A OUTPUT -o eth0 -j DROP

echo "Network rules successfully modified."
fi
###
### Alright, I've been thinking. When life gives you lemons, don't make lemonade! Make life take the lemons back! Get mad! I don't want your damn lemons; 
### what am I supposed to do with these? Demand to see life's manager! Make life rue the day it thought it could give Cave Johnson lemons! 
### Do you know who I am? I'm the man who's gonna burn your house down... with the lemons! I'm gonna get my engineers to invent a combustible lemon that burns your house down!'"
### ?Cave Johnson
