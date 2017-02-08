<?php
session_start();
if($_SESSION['sid1']==session_id())
{
$user=$_SESSION['username'];

if(isset($_POST['submit']))
{ 
	if(getimagesize($_FILES['fileToUpload']['tmp_name'])==true)
	{
		$name=addslashes($_FILES["fileToUpload"]["name"]);
		$img=file_get_contents(addslashes($_FILES["fileToUpload"]["tmp_name"]));
		$img=base64_encode($img);
		 $conn=mysqli_connect("localhost","root","",project_chat);
		$sql=mysqli_query($conn,"Update img SET Image='$img' WHERE Username='$user'");
		if($sql)
		{
			header("location:display.php");
		}
		else{
			echo "value not inserted";
		}
	}
	else
	{
		echo "Select image:";
	}
}
}
else{
	header("location:login.html");
}
?>