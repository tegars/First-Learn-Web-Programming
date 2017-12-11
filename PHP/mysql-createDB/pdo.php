<?php
	$host= 'localhost';
	$username= 'root';
	$password= '';
	$db= 'latihan';

	try{
		$conn= new PDO("mysql:host=$host; dbname=$db", $username, $password);
		//set
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->exec("create database coba2");
		echo 'berhasil membuat database';

	}catch(PDOException $e){
		echo "error"+$e->getMessage();
	}

?>