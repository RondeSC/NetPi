<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - Network Information</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
-->
</style></head>

<body>
<div align="center">
  <p><a href="index.php"><img src="img/header.png" /></a></a>
  </p>
  <table width="390" border="0">
    <tr>
    <td width="87"><img src="img/eth0.png" width="85" height="55" /></td>
    <td width="369"><b><?PHP echo nl2br(shell_exec('/sbin/ifconfig eth0 2>&1| grep -E "inet |eth0"')); ?></b></td>
  </tr>
  <tr>
    <td><img src="img/wlan0.png" width="85" height="55" /></td>
    <td><b><?PHP echo nl2br(shell_exec('/sbin/ifconfig wlan0 2>&1| grep -E "inet |wlan0"')); ?></b></td>
  </tr>
</table>
  <a href="index.php"><img src="img/menu.png" width="142" height="27" /></a><a href="externalip.php"><img src="img/external.png" width="142" height="27" /></a><br />
	<a href="http://127.0.0.2/netpi/active/index.php?function=pentest"><img src="img/mode.png" border="0" /></a><a href="http://127.0.0.2/netpi/active/index.php?function=stealth"><img src="img/stealth.png" border="0" /></a><a href="index.php?function=power"><img src="img/power.png" border="0" /></a></p>
</div>
</body>
</html>
<!--
Didn’t we run out of IPv4 jokes?
There’s no place like 127.0.0.1
-->