<?php
session_start();
if($_SESSION['sid1']==session_id())
{
$user1=$_POST['name'];
$user=$_SESSION['username'];


		 $conn=mysqli_connect("localhost","root","",project_chat);
		$sql=mysqli_query($conn,"Update img SET Fullname='$user1' WHERE Username='$user'");
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