<?php
session_start();
if($_SESSION['sid1']==session_id())
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$conn=mysqli_connect("localhost","root","",project_chat);
	$sql=mysqli_query($conn,"update chat set Password='$pass' where Username='$user'");
	if($sql)
	{
		header("location:login.html");
	}
	
}
else
{
	header("location:login.html");
}

?>