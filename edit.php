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
	margin-left:1100px;
	
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
	margin-top:10px;
	margin-left:150px;
}
</style>
</head>
<body bgcolor=purple>
<div class="div1">

<a class="a1" href='logout.php'>Logout</a>
</div>
<?php
if($_SESSION['sid1']==session_id())
{
	$count1=0;
//echo  "<p style='margin-left:1100px;color:white'>Welcome, ".$_SESSION['username'];
}
else{
	header("location:login.html");
}
?>

</body>
</html>
<?php
display();
	function display()
	{
		
	$conn=mysqli_connect("localhost","root","",project_chat);
	$result1=mysqli_query($conn,"select * from img");
	
	$row1=mysqli_fetch_array($result1);
	if(isset($row1))
	{
		$count1++;
		$result=mysqli_query($conn,"select * from img");
	while($row=mysqli_fetch_array($result))
	{
		    if($_SESSION['username']==$row['Username'])
		    { 
			$count++;
		    echo '<div class="div4"><img  height="180" width="180" src="data:image;base64,'.$row['Image'].'"></div>';
		    echo "<br><br>";
			echo '<a class="imgedit" href="imageedit.php">Image edit</a>';
			echo "<br><br>";
			echo "<p class='fa fa-user' style='margin-left:150px;margin-top:10px;font-size:24;color:white'>".' Name: '.$row['Fullname']."</p><br>";
		    echo "<br><br>";
			echo '<a class="nameedit" href="nameedit.php">Edit</a>';
			echo "<br><br>";
		    echo "<p class='fa fa-suitcase' style='margin-left:150px;margin-top:10px;font-size:24;color:white'>".' Work at: '.$row['Work']."</p><br>";
		    echo "<br><br>";
			echo '<a class="nameedit" href="workedit.php">Edit</a>';
			echo "<br><br>";
			echo "<p class='fa fa-heart' style='margin-left:150px;margin-top:10px;font-size:24;color:white'>". $row['Relation']."</p><br>";
		    echo "<br><br>";
			echo '<a class="nameedit" href="reledit.php">Edit</a>';
			echo "<br><br>";
			echo "<p class='fa fa-home' style='margin-left:150px;margin-top:10px;font-size:24;color:white'>".' Lives in: '.$row['Lives']."</p><br>";
		    echo "<br><br>";
			echo '<a class="nameedit" href="liveedit.php">Edit</a>';
			echo "<br><br>";
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


?>
