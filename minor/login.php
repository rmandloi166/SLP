<?php
require_once 'connection.php';

if (isset($_POST['email'])&&($_POST['pass'])) {

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$query = "SELECT name FROM users WHERE email='$email' AND password='$pass'";
	$query_run = mysqli_query($con, $query);
	
	$query_num_rows = mysqli_num_rows($query_run);
	

	if ($query_num_rows==0) {
		echo "Invalid username/password";
		include 'loginform.php';

	}
	else{
		
		header('Location: admin.php');
		
	}
	
}

























?>