<?php
	/*
	#01 MySQLi extension (the "i" stands for improved) - hanya berjalan di MySQL
		1. MySQLi (object-oriented)
		2. MySQLi (procedural)
	#02 PDO (PHP Data Objects) - berjalan di 12 database berbeda
	*/

	#01 Open Connection to MySQL with MySQLi Object-Oriented
	$host= 'localhost';
	$username= 'root';
	$password= '';

	$conn= new mysqli($host, $username, $password);
	if($conn->connect_error){
		die('Gagal Sam'.$connect_error);
	}else{
		echo 'Berhasil Koneksi 1';
	}
	//untuk menutup koneksi
	//$conn->close();



	#02 Open Connection to MySQL with MySQLi Procedural
	$host= 'localhost';
	$username= 'root';
	$password= '';

	$conn= mysqli_connect($host, $username, $password);
	if(!$conn){
		die('Gagal Sam'.mysqli_connect_error());
	}else{
		echo 'Berhasil Koneksi 2';
	}
	//untuk menutup koneksi
	//mysqli_close($conn);



	#03 Open Connection to MySQL with PDO
	$host= 'localhost';
	$username= 'root';
	$password= '';

	try{
		$conn= new PDO("mysql:host=$host; dbname=latihan", $username, $password);
		//set PDO error
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo 'Berhasil koneksi 3';
	}catch(PDOException $e){
		echo 'Gagal koneksi'.$e->getMessage();
	}
	//untuk menutup koneksi
	//$conn= null;



	#04 Versi paling banyak dipakai
	$host='localhost';
	$username= 'root';
	$password= '';
	$database= 'latihan';

	$conn= mysql_connect($host, $username, $password);
	mysql_select_db($database);

	if($conn){
		echo 'Berhasil Koneksi 4';
	}else{
		echo 'Gagal koneksi';
	}
	//untuk menutup
	//mysql_close($conn);
?>