<?php
session_start();
echo "Welcome  ".$_SESSION['username'];
?>
<html>
<body>
<a href="inbox.php">Inbox</a>
<form action="logedin.php" method="post">
Want to chat with:<input type="text" name="user"/>
<input type="submit" value="Submit">
</form>
</body>
</html>