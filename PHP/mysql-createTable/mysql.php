<?php
	$host= 'localhost';
	$username= 'root';
	$password= '';
	$database= 'latihan';

	mysql_connect($host, $username, $password);
	mysql_select_db($database);
	$aksi= mysql_query("CREATE TABLE mahasiswa(nim int(5), nama varchar(50))");
	if($aksi){
		echo 'Berhasil membuat table';
	}else{
		echo 'Gagal Membuat table';
	}
?>