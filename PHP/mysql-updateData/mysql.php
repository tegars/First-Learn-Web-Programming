<?php
	$host= 'localhost';
	$username= 'root';
	$password= '';
	$database= 'latihan';
	mysql_connect($host, $username, $password);
	mysql_select_db($database);

	$nama_baru= 'tegar';
	$alamat_baru= 'jakarta';

	mysql_query("UPDATE teman set nama='$nama_baru', alamat='$alamat_baru' where id=7;");
?>