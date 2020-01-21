<?php

session_start();
include("db.php");

if(isset($_POST['submit']))
$username = $_POST['username'];
$password = $_POST['password'];

$newpwd = mysqli_query($conn, "SELECT password FROM users WHERE username ='$username'");

 if(mysqli_num_rows($newpwd) > 0)  {

	$sql = "UPDATE users SET password = '$password' WHERE id = '$id'";
	mysqli_query($conn, $sql);

}else {
 	
 	   echo "Your Password exit";
	    
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
		<h2>Password Reset</h2>
	</div>

	<form action="" method="post">

		<div class="input-group">
		<label>Current Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
		<label>Change Password</label>
			<input type="password" name="password">
		</div>

		<div class="input-group">
		<label>Retype Password</label>
			<input type="password" name="password_1">
		</div>
		
		<div class="input-group">
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</div>
		
		
		

</body>
</html>