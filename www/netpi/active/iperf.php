<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NetPi - iPerf</title>

<script type="text/javascript">
function addCode(key){
	var ip = document.forms[0].ip;
	if(ip.value.length < 15){
		ip.value = ip.value + key;
	}
	if(ip.value.length == 15){
		document.getElementById("message").style.display = "block";
		setTimeout(submitForm,1000);	
	}
}

function submitForm(){
	document.forms[0].submit();
}

function emptyip(){
	document.forms[0].ip.value = "";
}

function del(){
    document.getElementById("ipbox").value="";
}

</script>
<style>

}	
#keypad {margin:auto; margin-top:20px;}
#submitbtn {margin:auto; margin-top:20px;}

body {
	background-color: #3b5997;
}
#keypad tr td {
	vertical-align:middle; 
	text-align:center; 
	border:1px solid #000000; 
	font-size:18px; 
	font-weight:bold; 
	width:40px; 
	height:30px; 
	cursor:pointer; 
	background-color:#666666; 
	color:#CCCCCC;}

#submitbtn tr td {
	vertical-align:middle; 
	text-align:center; 
	border:1px solid #000000; 
	font-size:18px; 
	font-weight:bold; 
	width:40px; 
	height:30px; 
	cursor:pointer; 
	background-color:#458B00; 
	color:#CCCCCC;}

#input[type=Submit] {
    background-color: pink; //Example stlying
    }	
	
#keypad tr td:hover {background-color:#999999; color:#FFFF00;}
#submitbtn tr td:hover {background-color:#66CD00; color:#000000;}
.display {
	width:130px; 
	margin:10px auto auto auto; 
	background-color:#000000; 
	color:#00FF00; 
	font-size:18px; 
	border:1px solid #999999;
}
#message {
	text-align:center; 
	color:#009900; 
	font-size:14px; 
	font-weight:bold; 
	display:none;
}
.submitbtn {
	background-color: #090;
}
</style>
</head>
<body>
<div align="center">
<a href="index.php"><img src="img/header.png" />
</a>

<form action="iperfworker.php" method="post">
<table width="375" border="0">
  <tr>
    <td>
          <table width="100%" border="0">
        <tr>
          <td><b><big>iPerf Server</big> Address:</b>
<input type="text" id="ipbox" name="ip" value="iperf.he.net" maxlength="15" class="display" readonly="readonly" />
		  </td>
        </tr>
        <tr>
          <td>
		<table id="keypad" width="100%" border="0">
            <tr>
              <td onclick="addCode('192.168.');">192.168.</td>
              <td onclick="addCode('10.0.')">10.0.</td>
            </tr>
            <tr>
              <td onclick="addCode('10.128.')">10.128.</td>
              <td onclick="addCode('172.16.')">172.16.</td>
            </tr>
          </table></td>
        </tr>
      </table>
          <table id="submitbtn" width="100%" border="0">
            <tr>
              <td><input type="Submit" value="START TEST!"/></td>
            </tr>
          </table></td>
    <td><b>
<table id="keypad" cellpadding="5" cellspacing="3">
	<tr>
    	<td onclick="addCode('1');">1</td>
        <td onclick="addCode('2');">2</td>
        <td onclick="addCode('3');">3</td>
    </tr>
    <tr>
    	<td onclick="addCode('4');">4</td>
        <td onclick="addCode('5');">5</td>
        <td onclick="addCode('6');">6</td>
    </tr>
    <tr>
    	<td onclick="addCode('7');">7</td>
        <td onclick="addCode('8');">8</td>
        <td onclick="addCode('9');">9</td>
    </tr>
    <tr>
    	<td onclick="del();">DEL</td>
        <td onclick="addCode('0');">0</td>
        <td onclick="addCode('.');">.</td>
    </tr>
</table>
</b>
</td>
  </tr>
</table>
</form>
  <a href="index.php"><img src="img/menu.png" width="142" height="27" /></a>
  <img src="img/t.png" width="142" height="27" />
</div>
</body>
</html>
<!---
I'm late, I'm late, For a very important date.
No time to say "Hello, Goodbye".
I'm late, I'm late, I'm late!
-->