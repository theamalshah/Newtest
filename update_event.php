<?php
//sample comment to test changes
session_start();
require "dbconnect.php";

if(isset($_POST['btn_sb']))
{
	$event_id=$_POST['event_id'];
	$event_name=$_POST['event_name'];
	$event_description=$_POST['event_description'];
	$event_timestamp=date("Y-m-d H:m:s");
	$event_venue=$_POST['event_venue'];
	$max_team_member=$_POST['max_team_member'];
	$student_category=$_POST['student_category'];
	 
	
	

	
		
	mysqli_query($con,"UPDATE `event_table` SET `event_name`='$event_name',`event_description`='$event_description',`event_timestamp`='$event_timestamp',`event_venue`='$event_venue',`max_team_member`='$max_team_member',`student_category`='$student_category',`image`='$image' WHERE is_active=1");
	$s=mysqli_affected_rows($con);
		
	if($s==1)
	{
		echo "<script>alert('Event Updated Successfully')</script>";
		echo "<script>document.location='edit_event.php'</script>";
		//echo "Data Updated Successfully";
		//header("Location:http://localhost/wonder tiffin/chef/profile.php");
	}
	
}


elseif (isset($_POST['btn_sb2'])) 
{
	    require "common/edit_prod_img_upload1.php";
	    
	    $event_id=$_POST['event_id'];
        $image=$edit_target_file1;

	     $qry="UPDATE event_table SET image='".$image."' WHERE event_id=$event_id";

	    $rs=mysqli_query($conn,$qry);
	    if($rs)
	    {
	    	 echo '<script> alert("Event Images Updatted  sucessfully")</script>';
		     echo '<script> window.location="manage_event.php"</script>';
		   
	    }
	    else
	    {
		    echo '<script> alert("Something is worng please check by admin")</script>';
		   echo '<script> window.location="manage_event.php"</script>';
	    }

}
else
{
	 echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="edit_event.php"</script>';
	
}

?>
