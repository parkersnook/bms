<?php
	session_start();
	$error='';
	if(isset($_POST['submit']))
	{
		if (empty($_POST['username']) || empty($_POST['password']))
		{
			$error = "Username of Password is invalid";
		}
		else
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			ob_start();

			include 'connectvarEECS.php'; 
	
			$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			if (!$conn) {
				die('Could not connect: ' . mysql_error());
			}

			$username = striplashes($username);
			$password = striplashes($passwrod);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			
			//select database
			$query = mysqli_query("SELECT * FROM Member where Member_ID='$password' AND memberEmail='$username'", $conn);
			$rows = mysql_num_rows($query);
		}
		if($rows == 1)
		{
			$_SESSION['login_user']=$username;
			header("Location: memberView.php");
		}
		else
		{
			$error = "Username or Password is invalid";
		}
		mysql_close($connection);
	}
?>

			
