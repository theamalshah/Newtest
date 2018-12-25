<?php
#session and dbconnection
require "dbconnect.php";
$id=$_GET['id'];
$status=$_GET['status'];
#loop and Query
if($status==1)
{
	$qry="UPDATE event_table SET is_active=2 WHERE event_id=$id";
}
else
{
	$qry="UPDATE event_table SET is_active=1 WHERE event_id=$id";	
}

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:manage_event.php");
}
else
{
	echo "update error";
}
?>