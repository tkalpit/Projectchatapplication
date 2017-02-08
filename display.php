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
	margin-left:1000px;
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

margin-top:80px;
border:1px solid black;
background-color:black;
height:108px;
}
.div3
{
	margin-left:900px;
    margin-top:20px;
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
.imgedit
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
	margin-left:150px;
	
}
.nameedit
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
	margin-left:150px;
	
	
	
}
.div4{
	margin-top:0px;
	margin-left:150px;
}
</style>
</head>
<body bgcolor=purple>
<div class="div1">
<a class="a2" href='edit.php'>Edit profile</a>

<a class="a1" href='logout.php'>Logout</a>
</div>
<?php
if($_SESSION['sid1']==session_id())
{
	
		
	$conn=mysqli_connect("localhost","root","",project_chat);
	$result1=mysqli_query($conn,"select * from img");
	
	$row1=mysqli_fetch_array($result1);
	if(isset($row1))
	{
	$result=mysqli_query($conn,"select * from img");
	while($row=mysqli_fetch_array($result))
	{
		    if($_SESSION['username']==$row['Username'])
		    { 
			$count++;
			echo  "<p style='margin-left:1050px;color:white'>Welcome, ".$row['Fullname'];
		    echo '<div class="div4"><img  height="180" width="180" src="data:image;base64,'.$row['Image'].'"></div>';
		    echo "<br><br>";
			echo "<p class='fa fa-user' style='margin-left:150px;margin-top:10px;font-size:24;color:white'>".' Name: '.$row['Fullname']."</p><br>";
			echo "<p class='fa fa-suitcase' style='margin-left:150px;margin-top:10px;font-size:24;color:white'>".' Work at: '.$row['Work']."</p><br>";
		    echo "<p class='fa fa-heart' style='margin-left:150px;margin-top:10px;font-size:24;color:white'>". $row['Relation']."</p><br>";
		    echo "<p class='fa fa-home' style='margin-left:150px;margin-top:10px;font-size:24;color:white'>".' Lives in: '.$row['Lives']."</p><br>";
		    
			}
	}
	}
	
	else
	{
		echo "<script>
            alert('Please fill profile first');
            window.location.href='editprofile.html';
            </script>";
	}
	if($count==0)
	{
		echo "<script>
            alert('Please fill profile first');
            window.location.href='editprofile.html';
            </script>";
	}
	mysqli_close($conn);
}


else{
	header("location:login.html");
}
?>

<div class="div2">
<div class="div3">
<form action="prsondisplay.php" method="post">
<table>
<tr><td style="color:white;font-size:25px;">Chat with : </td><td><input class=" user " autocomplete=off type="text" height="120px" name="user" placeholder="Search" required/></td></tr>
<tr><td>&nbsp</td><td><input class="button1 " type="submit" value="Submit"></td></tr>
</form>
</div>
</div>
</body>
</html>