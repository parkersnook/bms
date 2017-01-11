<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>
	<charset="utf-8">
	<meta name="viewport" content="width=device-width, intitial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<!--form to add a new member to the database--!>
	<div class="applicant">
	<h1>Add Member</h1>
	<form class="interviewScore" method="post" action="insertMember.php" name="addMember">
		<div class="form-group">
			<label>School ID</label><input type="number" name="memberID" placeholder="ID Number" class="form-control" required>
		</div>
		<div class="form-group">
			<label>First Name</label><input type="text" name="fName" placeholder="First" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Last Name</label><input type="text" name="lName" placeholder="Last" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Phone</label><input type="text" name="phone" placeholder="Phone" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Emial</label><input type="email" name="email" placeholder="Email" class="form-control" required>
		</div> 
		<input type=submit class="btn btn-default">
</div>
</body>
</html>
