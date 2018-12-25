<?php
session_start();
		

require "dbconnect.php";
$id=$_SESSION['id'];
		
$oldpass=$_POST['opass'];
$opass=md5($oldpass);
$newpass=$_POST['npass'];
$npass=md5($newpass);
$conformpass=$_POST['cpass'];
$cpass=md5($conformpass);

$qry="SELECT * FROM adminreg_table WHERE id='".$id."'";
$qry1=mysqli_query($conn,$qry);
if (mysqli_num_rows($qry1)>0) 
{
	
	
	while($row=mysqli_fetch_array($qry1))
	{
				
		$oldpass=$row['password'];
		

		if ($opass==$oldpass) 
		{
			

			if($npass==$cpass)
			{

				$qry="UPDATE adminreg_table SET password=$'".$npass."' WHERE id=$id";
				$qry2=mysqli_query($conn,$qry);
				echo '<script> alert("Password is succesfully Change please login again")</script>';
	                          echo '<script> window.location="index.php"</script>';
				 
			}
			else
			                {
			                	echo '<script> alert("New_Passowrd_AND_Conform_Password_is_not_same")</script>';
	                         echo '<script> window.location="changepass.php"</script>';
				              
			                }

		
		}
	}

}


?>
