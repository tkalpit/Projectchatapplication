<?php
session_start();

if($_SESSION['sid1']==session_id())
{
	$user=$_SESSION['username'];
	$pass=$_SESSION['password'];
	$conn=mysqli_connect("localhost","root","",project_chat);
	$sql=mysqli_query($conn,"select * from chat");
	while($row=mysqli_fetch_array($sql))
	{
		if($row['Username']==$user && $row['Password']==$pass)
		{
			header("location:display.php");
		}
	}
	echo "<script>
            alert('Invalid Username or Password');
            window.location.href='login.html';
            </script>";
}
else
{
	
	header("location:login.html");
}
?>