<?php
session_start();
if($_SESSION['sid1']==session_id())
{
	$_SESSION['reciever']=$_POST['user'];
}
else
{
header("location:login.html");
}
?>
<html>
<head>
<title>Chat Application</title>
<link rel="shortcut icon" href="chat-2-icon.png" type="image/png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*
{
	margin:0px auto;
	padding:0px;
}
.a2:hover
{
background-color: #4CAF50;
color:white;
}
.a2
{
    
	background-color: #52BE80;
    border:1px pink;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
	border-radius:5px;
	margin-left:900px;
}
.a1:hover
{
background-color: #4CAF50;
color:white;
}
.a1
{
    
	background-color: #52BE80;
    border:1px pink;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
	border-radius:5px;
	margin-left:40px;
	
}

.div1
{
    border:1px solid black;
	height:100px;
	background-color:black;
	line-height:100px;
}
.div2{
margin-left:1100px;
margin-top:40px;
}
.user{
border-radius:5px;
 border:1px pink;
height:30px;
}
.button1:hover
{
background-color: #4CAF50;
color:white;
}
.button1
{
    background-color: #52BE80;
    border:1px pink;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:5px;
}
.div4{
	margin-top:20px;
	margin-left:150px;
}
</style>
</head>
<body bgcolor=purple>

</body>
</html>
<?php

display();
	function display()
	{
	$conn=mysqli_connect("localhost","root","",project_chat);
	$result=mysqli_query($conn,"select * from img");
	while($row=mysqli_fetch_array($result))
	{
		if($_SESSION['reciever']==$row['Fullname'] && $_SESSION['username']!=$row['Username'])
		{ 
		$count++;
		$_SESSION['reciever1']=$row['Username'];
		echo '<img style="margin-left:150px;margin-top:20px;height:60px;width:60px;" src="data:image;base64,'.$row['Image'].'"></img>';
		echo $row['Fullname'];
		echo "<br>";
		}
		
	}
	
	mysqli_close($conn);
	}


?>