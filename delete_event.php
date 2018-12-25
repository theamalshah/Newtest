<?php

require "dbconnect.php";
$event_id=$_GET['event_id'];


$qry="UPDATE event_table SET is_active=0 WHERE event_id=$event_id";

$rs=mysqli_query($conn,$qry);

if($rs)
{
	   echo '<script> alert("Sucessfully Delete Event")</script>';
		echo '<script> window.location="manage_event.php"</script>';
	
}
else
{
	  echo '<script> alert("Something is worng please check by admin")</script>';
		echo '<script> window.location="manage_event.php"</script>';
	
}

?>