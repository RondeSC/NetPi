# what this command pipeline is doing:
#   wpa_cli scan_results: use the wpa cli utility to scan for wifi networks
#   sed -n '3,20p': only return lines 3-20, cutting the header lines
#   awk -F"\t" '{printf "%-24s\t%s\t%s\t%s\n", $NF, $3, $2, $4}': select most useful colums, reorder them, and align them nicely
#   sort -t$'\t' -n -r -k2': sort this list by signal strength

#wpa_cli -i wlan0 scan_results|sed -n '3,20p'|awk -F"\t" '{printf "%-24s\t%s\t%s\t%s\n", $NF, $3, $2, $4}'|sort -t$'\t' -n -r -k2
# use the following line until formating to fit the results from above is being done
wpa_cli -i wlan0 scan_results
exit
