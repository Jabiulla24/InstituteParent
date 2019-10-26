<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ICPI</title>
<link rel="stylesheet" href="style.css">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<script> $(function() {$( document ).tooltip();}); </script>
</head>

<body>

<h1 class="labelname1" align="center">Welcome to Institue Parent Interaction System</h1>

<div align="center"  width="400" >

<div class="contain" align="center">

<form method="post" name="login" action="savenotifications.php" >
  <table width="460" height="162">
    <tr>
      <h2 class=""> Add Notification</h2>
    </tr>
    <tr>
      <td><label for="notifications" class="labelname">Notification:</label></td>
      <td><input type="textarea" size="40" title="Enter Your Notification..." name="notifications" 
id="userid" required="required" autocomplete="on" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;box-shadow:6px 10px 12px #888;'"/></td>
      <td></td>
    </tr>
    <tr> </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" title="Click Here to Login..."  value="Submit"  
onmouseover="style='color:white; font-size:18px; background-color:brown; padding:10px;width:220px;
 height:50px;  background-color:blue; align:center;-moz-box-shadow: 11px 10px 14px #888; 
-webkit-box-shadow: 11px 10px 12px #888;box-shadow:11px 10px 12px #888;'" 
onmouseout="style='width:220px; height:50px; padding:2px; background-color:brown; align:center;font-size:18px;'" /></td>
    </tr>
  </table>
</form>

</div>

<br>

<br>



</div>
</body>
</html>