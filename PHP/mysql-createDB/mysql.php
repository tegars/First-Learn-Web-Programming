<?php
	$host= 'localhost';
	$username= 'root';
	$password= '';

	mysql_connect($host, $username, $password);
	$aksi= mysql_query("CREATE DATABASE coba2;");
	if($aksi){
		echo 'Berhasil membuat database';
	}else{
		echo 'Gagal Membuat database';
	}
?>