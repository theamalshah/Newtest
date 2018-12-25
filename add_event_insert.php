
<?php
session_start();
require "dbconnect.php";
require "common/prod_img_upload1.php";

if(isset($_POST['btn_sb']))
{
	$event_name=$_POST['event_name'];
	$event_description=$_POST['event_description'];
	$event_timestamp=date("Y-m-d H:m:s");
	$event_venue=$_POST['event_venue'];
	$max_team_member=$_POST['max_team_member'];
	$student_category=$_POST['student_category'];
	$image=$target_file1;
	$is_active=1;
	

	 $qryy="SELECT * FROM event_table WHERE event_name='".$event_name."'";
	

	$ress=mysqli_query($conn,$qryy);
	
	if(mysqli_num_rows($ress)>0)
	{
		echo '<script> alert("product Allready Exist")</script>';
		echo '<script> window.location="manage_event.php"</script>';
    }
    else
    {
    $qry="INSERT INTO event_table(event_name,event_description,event_timestamp,event_venue,max_team_member,student_category,image,is_active) VALUES ('".$event_name."','".$event_description."','".$event_timestamp."','".$event_venue."',$max_team_member,'".$student_category."','".$image."',$is_active)";
    
	$rs=mysqli_query($conn,$qry);
     
	if($rs)
	{
		echo '<script> alert("Sucessfully Add Event")</script>';
		echo '<script> window.location="manage_event.php"</script>';
		
	}
	else
	{
         echo '<script> alert("Something is worng plz check by admin")</script>';
		echo '<script> window.location="add_event.php"</script>';
	}
  }
   
}
else
{
	    echo '<script> alert("Direct URL Called")</script>';
		echo '<script> window.location="add_event.php"</script>';
	
}
?>
