<?php
	$host= 'localhost';
	$username= 'root';
	$password= '';
	$db= 'latihan';
	try{
		$conn= new PDO("mysql:host=$host; dbname=$db", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "berhasil koneksi";
		
	}catch(PDOException $e){
		echo "Error"+ $e->getMessage();
	}
?>