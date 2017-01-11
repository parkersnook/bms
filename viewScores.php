<!DOCTYPE html>
<html>
<head>
        <title>BMS Scholarship</title>
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
        $query = "SELECT `Fname`, `Lname`, `Academic`, `Activity`, Sports, `Total`, Notes  FROM `Applicant`, `Interview`
		  WHERE `Applicant`.`email`=`Interview`.`email`  
		  GROUP BY Total
		  ORDER BY Total DESC";

        $result = mysqli_query($conn, $query);
        if (!$result) {
                die("Query to show fields from table failed");
        }


        echo "<h1>Scores</h1>";
        echo "<table class='table'><tr>";
        // printing table headers
        echo"<tr><th>First</th><th>Last</th><th>Academic Score</th><th>Activity Score</th><th>Sports</th><th>Total</th><th>Notes</th></tr>";
        echo "</tr>\n";
        while($row = mysqli_fetch_row($result)) {
                echo "<tr>";
                // $row is array... foreach( .. ) puts every element
                // of $row to $cell variable
                foreach($row as $cell)
                        echo "<td>$cell</td>";
                echo "</tr>\n";
        }
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>

        <a href="memberView.php" class="btn btn-default">Main</a>

</body>

</html>



