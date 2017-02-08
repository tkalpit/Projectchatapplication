<?php
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$count=0;
$conn=mysqli_connect("localhost","root","",project_chat);
$sql1=mysqli_query($conn,"select * from chat");
while($row=mysqli_fetch_array($sql1))
{
	
	if($row['Username']==$username)
	{
		$count++;
		echo "<script>
            alert('Please choose different username');
            window.location.href='signup.html';
            </script>";
	}
}
if($count==0)
{
$sql=mysqli_query($conn,"insert into chat(Username,Email,Password,Mobile_No) values('$username','$email','$password','$mobile')");
if($sql)
{
	header("location:login.html");
}
else
{
	echo "Value Not inserted";
}
}
?>