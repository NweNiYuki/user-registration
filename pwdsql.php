<?php include("db.php"); ?>
<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$newpwd = mysqli_query($conn, "SELECT password FROM users WHERE username ='$username'");

 if(mysqli_num_rows($newpwd) > 0)  {

	$sql = "UPDATE users SET password = '$password' WHERE username = '$username'";
	mysqli_query($conn, $sql);

}else {
 	
 	   echo "Your Password exit";
	    
	}


?>