<!DOCTYPE html>
<html>

	<head>
		<title>Users</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
<body>

<?php
ob_start();

	include 'connectvarEECS.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	
	$email = $_COOKIE["info"];
	$academic = $_POST['academic'];
	$activity = $_POST['activity'];
	$sports = $_POST['sports'];
	$notes = $_POST['notes'];
	$fit = $_POST['character'];

	$sql .= "INSERT INTO Interview (Academic, Activity, Sports, Fit, Notes, email)
		VALUES('$academic', '$activity', '$sports', '$fit', '$notes', '$email');";
	if(mysqli_query($conn, $sql))
	{
		mysqli_close($conn);
	}	
	else
	{
		die(mysqli_error($conn));
	}
?>	
	<h1> Interview Complete! </h1>
	<a href="memberView.php">Back to main!</a>
</body>
</html>


