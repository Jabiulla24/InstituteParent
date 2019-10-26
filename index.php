<?php

session_start();

?>
<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login System </title>
<link rel="stylesheet" href="style.css">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<script> $(function() {$( document ).tooltip();}); </script>
</head>

<body>

<h1 class="labelname1" align="center">Welcome to Institue Parent  Portal</h1>

<div align="center"  width="400" >

<div class="contain" align="center">

<form method="post" name="login" action="login_web.php" >

<table>
<tr>
<h2 class=""> LOGIN SYSTEM</h2>
</tr>

<tr>
<td>
<label for="name" class="labelname"> USER NAME </label>
</td>
<td>
<input type="text" title="Enter Your User ID Plz..." name="username" 
id="userid" required="required" autocomplete="on" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;box-shadow:6px 10px 12px #888;'"/>
</td>
<td>
</tr>

<tr>
<td>
<label for="name" class="labelname"> PASSWORD </label>
</td>
<td>
<input type="password" title="Enter Your Password..." name="password" 
id="passid" required="required"  autocomplete="off" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888; -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;'"/>
<br/>
</td>
</tr>

<tr>
<td>
</td>
<td>
<input type="submit" name="submit" id="submit" title="Click Here to Login..."  value="Login"  
onmouseover="style='color:white; font-size:18px; background-color:brown; padding:10px;width:220px;
 height:50px;  background-color:blue; align:center;-moz-box-shadow: 11px 10px 14px #888; 
-webkit-box-shadow: 11px 10px 12px #888;box-shadow:11px 10px 12px #888;'" 
onmouseout="style='width:220px; height:50px; padding:2px; background-color:brown; align:center;font-size:18px;'" />
</td>
</tr>

</table>

</form>

</div>

<br>

<br>

<div>
<form method="post" name="register" action="registerform.php">
<pre>
	<h2 class="labelname">want to Register?</h2>
</pre>
<input type="submit" title="Click Here Register..." name="register" id="submit"  value="Register" 
onmouseover="style='color:white; font-size:22px; background-color:blue; padding:10px;width:250px;
 height:50px; padding:2px; align:center;-moz-box-shadow: 11px 10px 14px #888; -webkit-box-shadow: 11px 10px 12px #888;
box-shadow:11px 10px 12px #888;'" 
onmouseout="style='width:250px; height:50px; padding:2px; background-color:brown; align:center;'"/>
</form>
</div>

</div>
</body>
</html>