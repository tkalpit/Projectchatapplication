<?php
session_start();
if($_SESSION['sid1']==session_id())
{
$conn=mysqli_connect("localhost","root","",project_chat);
$sql=mysqli_query($conn,"select * from img");
while($row=mysqli_fetch_array($sql))
{
	
	if($row['Username']==$_SESSION['reciever'])
	{
		$name=$row['Fullname'];
	}
}


mysqli_close($conn);

$sender=$_SESSION['username'];
$reciever=$_SESSION['reciever'];
$page = $_SERVER['PHP_SELF'];
$second = "20";

}
else{
	header("location:login.html");
}
?>
<html>
<head>
<title>Chat Application</title>
<link rel="shortcut icon" href="chat-2-icon.png" type="image/png" />
<meta http-equiv="refresh" content="<?php echo $second?>;URL='<?php echo $page?>'">
<style>
*
{
	margin:0px auto;
	padding:0px;
}
.ta{
border-radius:0px;
width:230px;
height:30px;
margin:0px auto;
padding:0px;
 position: static;

}

.a1:hover
{
background-color: #4CAF50;
color:white;
}
.a1{
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
.div1{
border:1px solid black;
background-color:black;
height:120px;
line-height:120px;

}
.div3{
	border:1px solid black;
	padding:0px;
	width:230px;
	overflow-x: hidden;
    overflow-y: scroll;
	height:300px;
	background-color:#52BE80;
	
}
textarea
{
	resize:none;
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
.div1
{
	border:1px solid black;
	height:100px;
	background-color:black;
	line-height:100px;
}
.div2
{
	margin-left:10px;
	margin-top:40px;
}
.user
{
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
.txt
{
font-family:arial;
font-size:30px;
}
</style>
</head>
<body bgcolor=purple>
<div class="div1">
<a class="a2" href='display.php'>My Profile</a>
<a class="a1" href='logout.php'>Logout</a>
</div>
<div style='margin-top:20px;text-align:center;border:1px solid black;font-size:20px;width:230px;height:30px;line-height:30px;background-color:blue;color:white;'><?php echo "<a style='text-decoration:none;color:white;' href='prson.php'>".$name."</a>";?></div>
<div class="div3">
<?php
if($_SESSION['sid1']==session_id())
{
$conn=mysqli_connect("localhost","root","",project_chat);
$sql=mysqli_query($conn,"select * from chat2 ");
if($sql)
{
while($row=mysqli_fetch_array($sql))
{
	if((($row['Sender']==$sender)||($row['Sender']==$reciever)) and (($row['Reciever']==$sender) || ($row['Reciever']==$reciever)))
	{
		
		if($row['Sender']==$sender)
		{
			echo "<div style='margin-top:10px;margin-left:100px;background-color:white;padding:4px;border-radius:14px;width:100px;'>".$row['Message']."</div><br>";
			
		}
		else
		{
	      echo "<div style='margin-top:10px;margin-left:10px;background-color:blue;padding:4px;border-radius:14px;width:100px;color:white'>".$row['Message']."</div><br>";
			
		}
	}
}
}
else
{
	echo "<script>
	alert('No messages');</script>";
}
}
else
{
	header("location:login.html");
}
?>
</div>

<div style="border:1px solid black;width:230px;">
<form action="msg.php" method="post">

<input type="text" autocomplete="off" class="ta" name="message" placeholder="Type text here..." required/>

</form>
</div>
</body>
</html>