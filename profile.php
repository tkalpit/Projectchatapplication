<?php
session_start();
if($_SESSION['sid1']==session_id())
{
$user=$_SESSION['username'];
$pass=$_SESSION['password'];
$name1=$_POST['name'];
$_SESSION['name']=$name1;
$work=$_POST['work'];
$_SESSION['work']=$work;
$relation=$_POST['relation'];
$_SESSION['relation']=$relation;
$lives=$_POST['livesin'];
$_SESSION['lives']=$lives;
if(isset($_POST['submit']))
{ 
	if(getimagesize($_FILES['fileToUpload']['tmp_name'])==true)
	{
		$name=addslashes($_FILES["fileToUpload"]["name"]);
		$img=file_get_contents(addslashes($_FILES["fileToUpload"]["tmp_name"]));
		$img=base64_encode($img);
		$conn=mysqli_connect("localhost","root","",project_chat);
		$sql=mysqli_query($conn,"INSERT INTO img(Name,Image,Fullname,Username,Password,Work,Relation,Lives) VALUES('$name','$img','$name1','$user','$pass','$work','$relation','$lives')");
		if($sql)
		{
			header("location:display.php");
		}
		
	}
	else
	{
		echo "<script>alert('Please select image');</script>";
	}
}
}
else{
	header("location:login.html");
}
?>