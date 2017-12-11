<!DOCTYPE html>
<html>
<head>
	<title>advanced-errorHandling</title>
</head>
<body>
<?php
	#01 Using die()
	// if(!file_exists('tegar.txt')){
	// 	die('file tidak ada');
	// }else{
	// 	$file= fopen('tegar.txt', 'r');
	// }
	//echo 'testing';


	#02 Create a custom error handling
	/*
	Syntax
	error_function(error_level, error_message, error_file, error_line, error_context);

	Keterangan
	error_level		: 
	error_message 	: 
	error_file		: 
	error_line		: 
	error_context	: 
	*/


	#03 SET ERROR HANDLER
	//error handler function
	function customError($errno, $errstr) {
		echo '<b>Error:</b>['.$errno.'] '.$errstr;
	}

	//set error handler
	set_error_handler("customError");

	//trigger error
	echo $test;


	#04 TRIGGER AN ERROR
	$test=2;
	if ($test>1){
		trigger_error("Value must be 1 or below");
	}


	#05 SEND ERROR BY EMAIL
	//error handler function
	function customError2($errno, $errstr) {
		echo "<b>Error:</b> [$errno] $errstr<br>";
		echo "Webmaster has been notified";
		error_log("Error: [$errno] $errstr",1,
	 	//"someone@example.com","From: webmaster@example.com");
	 	"tegarswasono3@gmail.com","From: tegarswasono3@gmail.com");
	}

	//set error handler
	set_error_handler("customError2",E_USER_WARNING);

	//trigger error
	$test=2;
	if ($test>1) {
	  trigger_error("Value must be 1 or below",E_USER_WARNING);
	}

?>
</body>
</html>