<?php
//var_dump($_POST);
//var_dump($_FILES);
$target_dir1 = "upload/event/";
$target_file1 = $target_dir1 . basename($_FILES["image"]["name"]);
//echo $target_file;

$uploadOk = 1;

$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
//echo "<br>".$imageFileType;


if(isset($_POST['submit']))
{
	$check = getimagesize($_FILES["image"]["tmp_name"]);

	//var_dump($check);
	if($check !== false) 
	{
		$uploadOk = 1;
	}

}

if(file_exists($target_file1))
{
	echo '<script>alert("Sorry file is already exists")</script>';
	$uploadOk = 0;
}
if ($_FILES["image"]["size"] > 15000000)
{
	echo '<script>alert("Sorry, your file is too large.")</script>';
	$uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" )
{
	echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")</script>';
	$uploadOk = 0;
}

if ($uploadOk == 0)
{
    echo'<script>alert ("Sorry, your file was not uploaded.")</script>';

}
else
{
	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["image"]["name"]). "has been uploaded.";
      
    }
}
?>


		