<?php 
$user=$_POST['username'];
$pass=$_POST['password'];
$login_session=$user;

if(isset($user,$pass))
{

include('db.php');
$fetch=mysql_query("select * from user where username='$user' and password='$pass'  ");
$count=mysql_num_rows($fetch);
$row=mysql_fetch_array($fetch);

    if($count!="" && $row['usertype']=="admin")
    {
	   
	header("Location:profile.php");	
	
    }
    else if ($row['usertype']=="staff")
    {
	
	header('Location:profilestaff.php');
    }
	else
	
	{
echo "Enter Correct Username and Password";
	header("Location:index.php");	
	}
	
	ob_end_flush();
}
else
{
	header('Location:index.php?msg=Please enter some username and password"');
}


?>
