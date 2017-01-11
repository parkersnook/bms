<?php
	//set variables
	$email = $_POST['username'];
	$memberID = $_POST['password'];
	//strats connection to databse
	ob_start();

	include 'connectvarEECS.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	//protects against sql injections
	$username = mysql_real_escape_string($email);
	$memberID = mysql_real_escape_string($memberID);
	$query = "SELECT * FROM Member WHERE Member_ID='$memberID' AND memberEmail='$email'";
	$sql = mysqli_query($conn, $query);
	//makes sure that the user credintials are correct
	$rows = mysqli_num_rows($sql);
	if($rows==1)
	{
		header("Location: memberView.php");
	}
	else
	{
		echo"Invalid username or password\n";
		echo"<a href='memberLogin.php'>Login</a>";
	}

	mysql_close($conn);
?>
