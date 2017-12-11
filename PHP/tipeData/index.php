<!DOCTYPE html>
<html>
<head>
	<title>tipeData</title>
</head>
<body>
<?php
	//PHP mendukung 8 tipe data
	#String
	#Integer = -2,147,483,648 and 2,147,483,647
	#Float (floating point numbers - also called double)
	#Boolean
	#Array
	
	#Object
	#NULL
	#Resource

	#01 Type String
	$a='tegar';
	var_dump($a);

	#02 Type Integer
	$b= 50;
	var_dump($b);

	#03 Type Float
	$c= 50.545;
	var_dump($c);

	#04 Type Boolean
	$d1= true;
	$d2= false;
	var_dump($d1);
	var_dump($d2);

	#05 Type Array
	$e= array('tatag', 'tegar', 'swasono');
	var_dump($e);

	#06 Objek
	class ini_class{
		public $f='tegar lagi';
	}
	$tegar= new ini_class();
	echo $tegar->f;
	
	#07 PHP Null
	$g= null;
	var_dump($g);

?>
</body>
</html>