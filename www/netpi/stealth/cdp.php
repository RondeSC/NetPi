<?PHP
    require_once "../../netpi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - Stealth - CDP</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
-->
</style></head>

<body>
<div align="center">
  <p><a href="index.php"><img src="img/header.png" /></a>
    <br />
    <br />
    </p>
  <b><p>Processing CDP Packet data ...<br />
  </p></b>
  <p>
  <?php
//  $cmd = 'sudo bash -x cdp.sh';
  $cmd = 'bash cdp.sh 2>&1';
  //echo "<pre>$output</pre>";
 
while (@ ob_end_flush()); // end all output buffers if any

$proc = popen($cmd, 'r');
echo '<pre>';
while (!feof($proc))
{
    echo fread($proc, 4096);
    @ flush();
}
echo '</pre>';
?>

<script>
  window.onload = function(){ setTimeout( function(){
    //alert("Ready to see results ?");
    location.href='cdpresult.php';
  }, 2000); };
</script>

</p>
  <p><br />
    <a href="http://127.0.0.2/netpi/stealth/index.php?function=pentest"><img src="img/mode.png" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/index.php?function=active"><img src="img/active.png" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/index.php?function=power"><img src="img/power.png" border="0" /></a></p>
</div>
</body>
</html>
<!---
Disappeared like a fart in a fan factory
-->
