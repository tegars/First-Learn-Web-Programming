<?php
	$host= 'localhost';
	$username= 'root';
	$password= '';
	$database= 'latihan';
	mysql_connect($host, $username, $password);
	mysql_select_db($database);

	#01 contoh 1
	$query= mysql_query("DELETE FROM teman WHERE id=8;");
	echo 'Berhasil menghapus data';
?>