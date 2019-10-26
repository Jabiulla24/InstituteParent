<?php
include('db.php');

$SLNO=$_REQUEST["qid"];

$sql="update queries set status='Query Solved' where qid='$SLNO'";
mysql_query($sql);
header("Location:queries.php");
?>


