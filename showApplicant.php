<!DOCTYPE html>
<html>

	<head>
		<title>Users</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
<body>

<?php


	//connects to database	
	include 'connectvarEECS.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	$query = "SELECT `Fname`, `Lname`, `GPA`, `High School` FROM `Applicant` ";

	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query to show fields from table failed");
	}
	

	//displays all applicants
	echo "<h1>Applicants</h1>";
	echo "<table id='t01'><tr>";
	// printing table headers
	echo"<tr><th>Name</th><th></th><th>GPA   </th><th>High School</th></tr>";
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {	
		echo "<tr>";	
		// $row is array... foreach( .. ) puts every element
		// of $row to $cell variable	
		foreach($row as $cell)		
			echo "<td>$cell    </td>";	
		echo "</tr>\n";
	}

	mysqli_free_result($result);
	mysqli_close($conn);
	?>
</body>

</html>

	

