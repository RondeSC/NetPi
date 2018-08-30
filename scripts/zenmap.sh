if [ $(ps aux |grep matchbox-keyboard|grep -v grep|wc -l) -eq 0 ]; then
  matchbox-keyboard extended &
fi

zenmap
exit
