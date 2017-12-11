<!DOCTYPE html>
<html>
<head>
	<title>advanced-session</title>
</head>
<body>
<?php
	session_start();

	#01 set session variabel and value
	$_SESSION['username']= 'tegar';
	$_SESSION['password']= 'fads';

	echo $_SESSION['username'];


	#02 Destroy all session variabel
	//session_unset();

	#03 Destroy one session variabel
	session_unset('username');
	echo $_SESSION['username'];


	#03 Destroy the session
	//session_destroy();



?>
</body>
</html>