<?php
session_start();
if($_SESSION['sid1']==session_id())
{

$user=$_SESSION['username'];
$work=$_POST['work'];

		 $conn=mysqli_connect("localhost","root","",project_chat);
		$sql=mysqli_query($conn,"Update img SET Work='$work' WHERE Fullname='$user'");
		if($sql)
		{
			header("location:display.php");
		}
		else{
			echo "value not inserted";
		}
		
}
	


else{
	header("location:login.html");
}
?>