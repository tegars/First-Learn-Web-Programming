<?php
$server_name="localhost";
$server_user="root";
$server_password="";
$database_name="latihan";
$server_connect=mysql_connect($server_name,$server_user,$server_password)or die("Tidak bisa membuat koneksi ke server");
$database_select=mysql_select_db($database_name,$server_connect)or die ("Tidak bisa menggunakan database");
?>