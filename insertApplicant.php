<!DOCTYPE html>
<html>

	<head>
		<title>Users</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
<body>

<?php
//connectiont to databse
	ob_start();

	include 'connectvarEECS.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
//setting variables from form
	$Fname = $_POST['firstName'];
	$Lname = $_POST['lastName'];
	$streetAdd = $_POST['streetAdd'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];	
	$gpa = $_POST['gpa'];
	$highSchool = $_POST['highSchool'];
	$phone = $_POST['phone'];
	$major = $_POST['major'];
	$gradYear = $_POST['gradYear'];
	$act = $_POST['act'];
	$email = $_POST['email'];
	$how = $_POST['how'];
	$sports = $_POST['sports'];
	$clubs = $_POST['clubs'];
	$honors = $_POST['honors'];
	$community = $_POST['community'];
	$hours = $_POST['hours'];
	$work = $_POST['work'];	
	
	
//sql statement to insert values into database
	$sql = "INSERT INTO Applicant (Fname, Lname, HighSchool, phone, StreetAdd, City, State, Zip, GPA, Major, GradYear, email)
		VALUES ('$Fname', '$Lname', '$highSchool', '$phone','$streetAdd', '$city', '$state', '$zip', '$gpa', '$major', '$gradYear', '$email');";
		
	$sql .= "INSERT INTO Activities (Sports, Awards, Clubs, Community, CommunityHours, Jobs, email)
		VALUES ('$sports', '$honors', '$clubs', '$community', '$hours', '$work', '$email');";
//runs query
	if(mysqli_multi_query($conn, $sql))
	{
		mysqli_close($conn);
	}
	else
	{
		die(mysqli_error($conn));
	}

	?>
	<div class="thanks">
		<h1>Thank you for submitting your application!</h1>
		<h4>Will will  be contaction you shortly. Please keep your eyes out for an email.</h4>
	</div>
	</body>
	</html>


