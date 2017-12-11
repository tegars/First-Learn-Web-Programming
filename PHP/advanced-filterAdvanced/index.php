<!DOCTYPE html>
<html>
<head>
	<title>advanced-filterAdvanced</title>
</head>
<body>
<?php
	#01 Validate an Integer Within a Range
	$int= 122;
	$min= 1;
	$max= 200;

	if(!filter_var($int, FILTER_VALIDATE_INT, array('options'=>array('min_range'=>$min, 'max_range'=>$max)))===false){
		echo 'angka diantara range';
	}else{
		echo 'angka diluar range';
	}


	#02 Validate IPv6 Address
	$IPv6= '2001:0db8:85a3:08d3:1319:8a2e:0370:7334';
	if(!filter_var($IPv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)===false){
		echo $IPv6.' is valid';
	}else{
		echo $IPv6.' isnt valid';
	}


	#03 Remove Characters With ASCII value > 127
	$string= '<h1>HELLO SAM!ÆØÅ!</h1>';
	$filter1= filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	echo $filter1;




?>
</body>
</html>