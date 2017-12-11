<!DOCTYPE html>
<html>
<head>
	<title>constant</title>
</head>
<body>
<?php
	define('nama', 'tegar');
	echo nama;

	#dibawah ini pasti eror karena constant hanya bisa di deklarasikan 1 kali
	define('nama', 'swasono');
	echo nama;
	
?>
</body>
</html>