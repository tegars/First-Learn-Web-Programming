<!DOCTYPE html>
<html>
<head>
	<title>advanced-create</title>
</head>
<body>
<?php
	#01 Menulis ulang file tegar.txt
	$myFile= fopen('tegar.txt', 'w')  or die('gagal cari file');

	//tambah 1 kalimat
	$baru1= 'kademangan Rt. 15 Rw. 02';
	fwrite($myFile, $baru1);
	//tambah 1 kalimat
	$baru2= 'kecamatan pagelaran';
	fwrite($myFile, $baru2);

	fclose($myFile);

	echo 'file tegar.txt berhasil di edit';

	#02 Cara Append tegar.txt
	/*
	tinggal rubah huruf 'w' menjadi 'a'
	/*
?>
</body>
</html>