
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
<div class="login">
	<!--log in forma--!>
	<h1>Member Login</h1>
	<form method="post" action="loginMember.php" name="mLogin">
		<div class="form-group">
			<label>Email</label><input type="text" name="username" placeholder="Email" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Password(Student ID Number)</label><input type="password" name="password" placeholder="Student ID" class="form-control" required>
		</div>
		<input type=submit class="btn btn-default" value="Login">
	</form>
</div>
</body>
</html>
