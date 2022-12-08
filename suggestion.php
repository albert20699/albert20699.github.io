<?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
	$_SESSION['username'] = NAN;
	$_SESSION['password']   = NAN;
	echo "<script>alert('以登出!!!');location.href='login.php';</script>";
?> 
