<?php
session_start();
include("db.php");

if(isset($_POST['login'])) {
	$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT* FROM users WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($result) == 1)
{
	$_SESSION['username']= $username;

	header("location: index.php");
}else {
	echo"wrong username and password";
}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form action="" method="post">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
		<label>Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<button type="submit" name="login" class="btn btn-primary">Login</button>
		</div>
		<a href="newpwd.php" type="button" class="btn btn-outline-dark" style="color: #f05f40;">Forgot Password?</a>

		<p>Not yet a number? <a href="register.php">Sing up</p>
	</form>
		

</body>
</html>