<?php
session_start();
$_SESSION['sid1']=session_id();
if($_SESSION['sid1']==session_id())
{
	
}
else
{
	header("location:login.html");
}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.div1
{

margin-top:140px;
margin-left:553px;
margin-right:540px;
padding:20px;
border-radius:12px;
background-color:white;
}
.user{
border-radius:5px;
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

</style>
</head>
<body bgcolor=purple>


<div class="div1">
<form action="forget.php" method="post">
<table>
<tr><td><i class="fa fa-user" style="font-size:24px"></i></td><td><input class="user" type="text" name="username" placeholder="Username" required/></td></tr>
<tr><td>&nbsp</td></tr>
<tr><td><i class="fa fa-lock" style="font-size:24px"></i></td><td><input class="user" type="text" name="password" placeholder="New Password" required/></td></tr>
<tr><td>&nbsp</td></tr>
<tr><td><i class="fa fa-lock" style="font-size:24px"></i></td><td><input class="user" type="text" name="password" placeholder="Confirm Password" required/></td></tr>
<tr><td>&nbsp</td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td><input class="button1" type="submit" value="Submit"></td></tr>

</table>
</form>
</div>
</body>
</html>