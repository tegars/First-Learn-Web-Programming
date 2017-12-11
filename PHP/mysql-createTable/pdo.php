<?php
	$host= 'localhost';
	$username= 'root';
	$password= '';
	$db='latihan';
	try{
		$conn= new PDO("mysql:host=$host; dbname=$db", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$conn->exec("create table mahasiswa(nim int, sama varchar);");
		echo 'berhasil buat tabel';

	}catch(PDOException $e){
		echo 'error'+$e->getMessage();
	}
?>