<?php 

	//session_start();
	// $_SESSION['logged']="false";
	$username= trim($_POST['email']);
	$password = trim($_POST['pass']);

	echo $username;
	echo "<br>";
	echo $password;

?>