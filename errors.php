<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form action="sqlcon.php" method="post">
		<!-- display errors validation -->
<div class="error">
<p>Your Passwords do not match!</p>

  </div>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn btn-primary">Register</button>
		</div>

		<p>Already a number? <a href="login.php">Sing in</p>
	</form>

</body>
</html>