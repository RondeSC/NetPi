<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - iperf - Results</title>
<style type="text/css">
<!--
body {
	background-color: #3b5997;
}
-->

 <script type="text/javascript">
        $(document).ready(function() {
            $('#Button1').click(function() {
                location.reload();
            });
        });     
    </script>
</style>
</head>
<body>
<html>
<body>
<div align="center">
<a href="index.php"><img src="img/header.png" /></a></a>
<table width="400" border="0">
  <tr>
    <td width="100%"><b>
	<?PHP 
	$iperf = shell_exec('iperf -c ' . escapeshellarg($_POST["ip"]) . ' 2>&1');
	echo nl2br($iperf);
	 ?>
     </b>
     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
  <a href="index.php"><img src="img/menu.png" width="142" height="27" /></a><a href="iperf.php"><img src="img/again.png" width="142" height="27" /></a><br />
  <a href="http://127.0.0.2/netpi/active/index.php?function=pentest"><img src="img/mode.png" border="0" /></a><a href="http://127.0.0.2/netpi/active/index.php?function=stealth"><img src="img/stealth.png" border="0" /></a><a href="/index.php?function=power"><img src="img/power.png" border="0" /></a></p>
</div>
</body>
</html>

<!--
My hovercraft is full of eels!
-->