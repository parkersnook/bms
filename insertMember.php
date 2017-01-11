<!DOCTYPE html>
<html>

	<head>
		<title>Users</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
<body>

<?php
	//connection to databse
	ob_start();

	include 'connectvarEECS.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	//setting varibales
	$memberID = $_POST['memberID'];
	$fname = $_POST['fName'];
	$lname = $_POST['lName'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	//insert into databse
	$sql = "INSERT INTO Member (Member_ID, memberEmail, Fname, Lname, Phone)
		VALUES ('$memberID', '$email', '$fname', '$lname', '$phone');";
	if(mysqli_query($conn, $sql))
	{
		echo"<div class='thanks'><h1>Member added!</h1></div>";
		echo"<a href='memberView.php'>Back to main</a>";
		mysqli_close($conn);
	}
	else
	{
		die(mysqli_error($conn));
	}
?>		
