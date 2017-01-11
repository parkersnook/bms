<!DOCTYPE html>
<html>
<head>
        <title>Applicants</title>
        <charset="utf-8">
        <meta name="viewport" content="width=device-width, intitial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<?php
ob_start();
	
	include 'connectvarEECS.php';


        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$conn) {
                die('Could not connect: ' . mysql_error($conn));
        }
        $query = "SELECT distinct `Fname`, `Lname`, Applicant.`email`, `HighSchool`, GPA, Sports, Awards, Clubs, Community, CommunityHours, Jobs FROM `Applicant`, Activities WHERE Applicant.email = Activities.email";

        $result = mysqli_query($conn, $query);
        if (!$result) {
                die("Query to show fields from table failed");
        }
	


        echo "<h1>Applicants</h1>";
        echo "<table class='table'><tr>";
        // printing table headers
        echo"<tr><th>First</th><th>Last</th><th>Email</th><th>High Shcool</th><th>GPA</th><th>Sports</th><th>Awards</th><th>Clubs</th><th>Community</th><th>Community Hours</th><th>Jobs</th></tr>";
        echo "</tr>\n";
        while($row = mysqli_fetch_row($result)) {
                echo "<tr>";
                // $row is array... foreach( .. ) puts every element
                // of $row to $cell variable
                foreach($row as $cell)
                        echo "<td>$cell</td>";
                echo "</tr>\n";
        }
;
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>

	<a href="memberView.php" class="btn btn-default">Main</a>

</body>
</html>
