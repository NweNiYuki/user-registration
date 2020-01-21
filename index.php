<?php
session_start();
include("db.php");



?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Home Page</title>
</head>
<body>

	<p><b>Welcome, <?php echo $_SESSION['username'] ?> From my Home Page.</b></p>

	<button type="submit" name="logout" class="btn btn-danger">Logout</button>

</body>
</html>