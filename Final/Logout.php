<?php

	echo "you have successfully logged out";
	
	$_SESSION["User"] = "Invalid";
	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy(); 
	
	header('Location: http://kmoonpage.com/IntroPHP/Final/Final.php');
?>