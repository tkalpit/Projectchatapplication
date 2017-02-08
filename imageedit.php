<?php
session_start();
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
<style>
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

.div1{
margin-left:450px;
margin-top:140px;
border:1px solid white;
margin-right:400px;
padding:7px;
background-color:white;
}

</style>
</head>
<body bgcolor=purple>
<div class="div1">
<form action="imageedit1.php" method="post" enctype="multipart/form-data">
    <table>
	<tr><td>Select image to upload:</td></tr>
	
    <tr><td><input  type="file" name="fileToUpload" required/></td></tr>
	<tr><td>&nbsp</td></tr>
	<tr><td><input class="button1" type="submit" value="Submit" name="submit"></td></tr>
	</table>
	</form>
	</div>
	</body>
	</html>