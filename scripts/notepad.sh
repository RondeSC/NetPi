# Notepad Function
# Starts Text Editor, followed by on screen keyboard.
leafpad &
if [ $(ps aux |grep matchbox-keyboard|grep -v grep|wc -l) -eq 0 ]; then
  matchbox-keyboard extended &
fi
exit
