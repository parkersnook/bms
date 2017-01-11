<!DOCTYPE html>
<html>
<head>
	<title>Application</title>
	<charset="utf-8">
	<meta name="viewport" content="width=device-width, intitial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<!--Application for scholarship--!>
<div class="applicant">
	<h1>BMS Scholarship Application</h1>
	<p>Fill out the application below to be considered for a $1000 scholarship</p>
	<form class="application" method="post" action="insertApplicant.php" name = "apply">
		<div class="form-group">
			<label>First Name</label><input type="text" name="firstName" placeholder="First" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Last Name</label><input type="text" name="lastName" placeholder="Last" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Street Address</label><input type="text" name="streetAdd" placeholder="Street Address" class="form-control" required>
		</div>
		<div class="form-group">
			<label>City</label><input type="text" name="city" placeholder="City" class="form-control" required>
		</div>
		<div class="form-group">
			<label>State</label><input type="text" name="state" placeholder="State" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Zip</label><input type="text" name="zip" placeholder="Zip Code" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Phone</label><input type="text" name="phone" placeholder="Phone Number" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Email</label><input type="email" name="email" placeholder="Email" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Name of High School</label><input type="text" name="highSchool" placeholder="High School" class="form-control" required>
	<div class="form-group">
			<label>High School Graduation Year </label><input type="number" name="gradYear" placeholder="Year" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Unweighted High School GPA</label><input type="text" name="gpa" placeholder="GPA" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Intended Major</label><input type="text" name="major" placeholder="Major" class="form-control" required>
		</div>
		<div class="form-group">
			<label>List all Sports you participated in and athletic honors(Team Capitan, All State, etc)</label>
			<textarea class="form-control" rows="5" name="sports"></textarea>
		</div>
		<div class="form-group">
			<label>List all extracurricular activities and leadership positions(outside of sports)</label>
			<textarea class="form-control" row="5" name="clubs"></textarea>
		</div>
		<div class="form-group">
			<label>List all high school honors, awards, and scholarships</label>
			<textarea class="form-control" row="5" name="honors"></textarea>
		</div>
		<div class="form-group">
			<label>List community involvment</label>
			<textarea class="form-control" row="5" name="community"></textarea>
		</div>
		<div class="form-group">
			<label>List all extracurricular activities and leadership positions(outside of sports)</label>
			<textarea class="form-control" row="5" name="clubs"></textarea>
		</div>
		<div class="form-group">
			<label>How many hours of community service have you completed?</label><input type="number" name="hours" placeholder="Hours" class="form-control" required>
		</div>
		<div class="form-group">
			<label>List work experience and internships</label>
			<textarea class="form-control" row="5" name="work"></textarea>
		
		</div>
		<input type=submit class="btn btn-default">
</form>
</div>
</body>
</html>
