<?php
session_start();

if(!isset($_SESSION['isValid']))
{
	header('location: login.php'); 
}
?>


<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
</head>
<body>
	<h1>Welcome home, alamin</h1>
	<a href="logout.php">logout</a>
</body>
</html>


