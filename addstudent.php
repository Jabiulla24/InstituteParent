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

<h1 class="labelname1" align="center"> Welcome to Institue Parent Interaction System</h1>

<div align="center"  width="400" >

<div class="contain" align="center">

<form method="post" name="login" action="savestudent.php" >

<table>

<tr>
<h2 class=""> Add Student</h2>
</tr>

<tr>
<td>
<label for="name" class="labelname">Student Name:</label>
</td>
<td>
<input type="text" class="inputdesc" title="Enter Your User ID Plz..." name="name" 
id="userid" required="required" autocomplete="on" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;box-shadow:6px 10px 12px #888;'"/>
</td>
<td>
</tr>
<tr>
<td>
<label for="name" class="labelname">Student USN:</label>
</td>
<td>
<input type="text" class="inputdesc" title="Enter Your User ID Plz..." name="usn" 
id="userid" required="required" autocomplete="on" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888;
 -webkit-box-shadow: 6px 6px 12px #888;box-shadow:6px 10px 12px #888;'"/>
</td>
<td>
</tr>
<tr>
<td>

<label for="name" class="labelname"> Password: </label>
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

<label for="name" class="labelname"> Mobile No: </label>
</td>
<td>
<input type="text" title="Enter Your Mobile..." name="mobileno" 
id="passid" required="required"  autocomplete="off" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888; -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;'"/>
<br/>
</td>
<tr>
<td>
<label for="email" class="labelname">Email Id: </label>
</td>
<td>
<input type="text" title="Enter Your EmailID..." name="email" 
id="passid" required="required"  autocomplete="off" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888; -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;'"/>
<br/>
</td>
</tr>
<tr>
<td>
<label for="email" class="labelname">Address: </label>
</td>
<td>
<input type="text" title="Enter Your Address..." name="address" 
id="passid" required="required"  autocomplete="off" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888; -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;'"/>
<br/>
</td>
</tr>
<tr>
<td>
<label for="email" class="labelname">SEM: </label>
</td>
<td>
<select name="sem" >
  <option value="1">I</option>
  <option value="2">II</option>
  <option value="3">III</option>
  <option value="4">IV</option>
  <option value="5">V</option>
  <option value="6">VI</option>
  
</select>
<br/>
</td>
</tr>
<tr>
<td>
<label for="email" class="labelname">Department: </label>
</td>
<td>
<select name="dept" >
  <option value="CS">Computer Science</option>
  <option value="EE">Electrical & Electronics</option>
  <option value="EC">Electrical & Communications</option>
  <option value="Mech">Mechanical</option>
  <option value="Auto">Automobile</option>
  <option value="Arch">Architecture</option>
  
</select>
<br/>
</td>
</tr>
<tr>
<td>
<label for="email" class="labelname">Total Marks: </label>
</td>
<td>
<input type="text" title="" name="marks" 
id="passid" required="required"  autocomplete="off" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888; -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;'"/>
<br/>
</td>
</tr>
<tr>
<td>
<label for="email" class="labelname">Attendence: </label>
</td>
<td>
<input type="text" title="" name="attendance" 
id="passid" required="required"  autocomplete="off" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888; -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;'"/>
<br/>
</td>
</tr>
<tr>
<td>
<label for="email" class="labelname">Fees: </label>
</td>
<td>
<input type="text" title="" name="fees" 
id="passid" required="required"  autocomplete="off" 
onmouseover="style='-moz-box-shadow: 6px 10px 12px #888; -webkit-box-shadow: 6px 6px 12px #888;
box-shadow:6px 10px 12px #888;'"/>
<br/>
</td>
</tr>

<tr>
<td>
<input type="submit" name="submit" id="submit" title="Click Here to Login..."  value="Submit"  
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



</div>
</body>
</html>