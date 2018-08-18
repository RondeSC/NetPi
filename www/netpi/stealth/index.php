<?PHP

require_once "../../netpi.php";

if (isset($_GET['function'])) {
    $function = $_GET['function'];
    run_func ($function);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - Stealth</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
-->
</style></head>

<body>
<div align="center"><a href="index.php"><img src="img/header.png" /></a>
  <br />
  <a href="http://127.0.0.2/netpi/stealth/lldp.php"><img src="img/function1.png" width="142" height="86" border="0"/></a><a href="http://127.0.0.2/netpi/stealth/cdp.php" onclick="cdpLink()"><img src="img/function2.png" width="142" height="86" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/index.php?function=draw"><img src="img/function3.png" width="142" height="86" border="0" /></a>
  <div id="notice" align="center" style="display:none;"> <big><b>Cisco Discovery Protocol</b></big> &nbsp; listening ...<br/> This will take a minute.</div>
  <br />
  <a href="http://127.0.0.2/netpi/stealth/wifisniff.php"><img src="img/function4.png" width="142" height="86" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/index.php?function=notepad"><img src="img/function5.png" width="142" height="86" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/net_details.php"><img src="img/function6.png" width="142" height="86" border="0" /></a><br />
  <a href="http://127.0.0.2/netpi/stealth/index.php?function=pentest"><img src="img/mode.png" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/index.php?function=active"><img src="img/active.png" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/index.php?function=power"><img src="img/power.png" border="0" /></a>
</div>

<script>
function cdpLink() {
  //alert ("This will take a minute.");
  var elem = document.getElementById('notice');
  elem.style.display = 'block'; // show the Notice feedback
}
</script>

</body>
</html>
