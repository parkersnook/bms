<?php
	//sets cookie to save email for interview form for anhour
	$email = $_GET['email'];
	setcookie("info", $email, time() + 3600);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Interview</title>
	<charset="utf-8">
	<meta name="viewport" content="width=device-width, intitial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>



<?php
	//connects to database
	ob_start();

	include 'connectvarEECS.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	//checks if email exists
	$check = "SELECT '$email' FROM Applicant WHERE email='$email'";
	$test = mysqli_query($conn, $check);
	$row = mysqli_num_rows($test);;
	if($row  == 0)
	{
		die("Does not exist!\n<a href='memberView.php'>Back to main menu!</a>");
		
	}	
	else{
	//display applicant data
	$sql = "SELECT Fname, Lname, HighSchool, GPA, Major, Sports, Awards, Clubs, Community, CommunityHours, Jobs FROM Applicant, Activities WHERE Applicant.email='$email' AND Activities.email='$email';";
	$result = mysqli_query($conn, $sql);
	if(!$result)
	{
		die("Query failed" . mysql_error($conn));
	}

	echo "<div class='displayApplicant'>";
	echo "<h1>Applicant Information</h1>";
	echo "<table class='table'><tr>";
	echo "<tr><th>First</th><th>Last</th><th>High School</th><th>GPA</th><th>Major</th><th>Sports<th>Activity</th></th><th>Awards</th><th>Clubs</th><th>Community</th><th>Community Service Hours</th><th>Jobs</th></tr>";
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result))
	{
		echo "<tr>";
		foreach($row as $cell)
		echo "<td>$cell</td>";
		echo "</tr>\n";
	}
	echo "</div>";
	}
	mysqli_free_result($result);
	mysqli_close($conn);

	?>
<!--Form used for scoring --!>
	<h1>Scores</h1>
	<form class="interviewScore" method="post" action="insertInterview.php" name="score">
		<div class="form-group">
			<label>Academic</label><input type="number" name="academic" placeholder="Academic" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Sports</label><input type="number" name="sports" placeholder="Sports" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Activity</label><input type="number" name="activity" placeholder="Activity" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Character</label><input type="number" name="character" placeholder="Character" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Notes</label>
			<textarea class="form-control" row="5" name="notes"></textarea>
		</div> 
		<input type=submit class="btn btn-default">
</body>
</html>
