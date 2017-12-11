<?php
	$host= 'localhost';
	$username= 'root';
	$password= '';
	$database= 'latihan';
	mysql_connect($host, $username, $password);
	mysql_select_db($database);

	$aksi= mysql_query("INSERT INTO teman(nama, alamat) VALUES ('coba1', 'malang1');");
	if($aksi){
		echo 'berhasil menambah data';
	}else{
		echo 'gagal menambah data';
	}

?>