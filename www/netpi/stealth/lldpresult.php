<?PHP
    require_once "../../netpi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - Analyze - Stealth</title>
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
<table width="410" border="0">
  <tr>
    <td width="100%">
<?PHP
	$path = "$log_path/lldp";

$latest_ctime = 0;
$latest_filename = '';    

$d = dir($path);
while (false !== ($entry = $d->read())) {
  $filepath = "{$path}/{$entry}";
  // could do also other checks than just checking whether the entry is a file
  if (is_file($filepath) && filectime($filepath) > $latest_ctime) {
    $latest_ctime = filectime($filepath);
    $latest_filename = $entry;
  }
}

$filename = "$path/$latest_filename";

$result_file = fopen($filename, "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($result_file)) {
  echo fgets($result_file) . "<br>";
}
fclose($result_file);


?>
    </td>
  </tr>
</table>
  <b>Filename: <?PHP echo $filename; ?></b>
  <br />
  <br />
  <a href="http://127.0.0.2/netpi/stealth/index.php"><img src="img/back.png" border="0" /></a><br />

  <a href="http://127.0.0.2/netpi/stealth/index.php?function=pentest"><img src="img/mode.png" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/index.php?function=active"><img src="img/active.png" border="0" /></a><a href="http://127.0.0.2/netpi/stealth/index.php?function=power"><img src="img/power.png" border="0" /></a></div>
</body>
</html>
<!---
Welcome to duty.
-->
