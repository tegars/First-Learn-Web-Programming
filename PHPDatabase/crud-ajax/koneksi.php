<?php
	$host="localhost";
	$username="root";
	$password="";
	$db="latihan";

	$koneksi = mysql_connect($host, $username, $password) or die("Koneksi ke database gagal!");
	if($koneksi){
		echo "berhasil";
	}
	mysql_select_db($db) or die('Gagal pilih database');
?>