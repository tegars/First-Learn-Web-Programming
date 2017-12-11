<!DOCTYPE html>
<html>
<head>
	<title>advanced-filter</title>
</head>
<body>
<?php
	
	#01 Sanitize a String
	$input1= '<h1>HALLO SAM</h1>';
	$filter1= filter_var($input1, FILTER_SANITIZE_STRING);
	echo $filter1;


	#02 Validate an integer
	$int= 300;
	if(!filter_var($int, FILTER_VALIDATE_INT)===false){
		echo 'ini angka';
	}else{
		echo 'ini bukan angka';
	}


	#03 Validate an IP address
	$ip= '127.0.0.1';
	if(!filter_var($ip, FILTER_VALIDATE_IP)===false){
		echo 'ini IP';
	}else{
		echo 'ini bukan IP';
	}


	#04 Sanitize and Validate an Email Address
	$email='tegarswasono3@gmail.com';

	//remove all illegal character from email
	$email= filter_var($email, FILTER_SANITIZE_EMAIL);

	//validate email
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)===false){
		echo $email.' is valid';
	}else{
		echo $email.' is not valid';
	}


	#05 Validate and Sanitize a URL
	$url='http://tegarswasono.web.id/';

	//remove all illegal character from a url
	$url= filter_var($url, FILTER_SANITIZE_URL);

	//validate url
	if(!filter_var($url, FILTER_VALIDATE_URL)===false){
		echo $url.' is valid';
	}else{
		echo $url.' isnt valid';
	}


?>
</body>
</html>