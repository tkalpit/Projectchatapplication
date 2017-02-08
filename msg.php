<?php
session_start();
if($_SESSION['sid1']==session_id())
{
$msg=$_POST['message'];
$sender=$_SESSION['username'];
$reciever=$_SESSION['reciever'];
$conn=mysqli_connect("localhost","root","",project_chat);
if($reciever)
{
$sql=mysqli_query($conn,"insert into chat2(Sender,Reciever,Message)values('$sender','$reciever','$msg')");
}

	
if($sql)
{
	
	
	    $Message="Your Message sent successfully";
		
		header("location:inbox.php?Message={$Message}");
	

}

}
else{
	header("location:login.html");
}

?>