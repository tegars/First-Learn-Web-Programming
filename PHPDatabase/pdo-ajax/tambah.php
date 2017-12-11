<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Tambah Data Diri Siswa</h2>
	<a href="index.php">Beranda</a>
	<hr/>
	
</div>
<hr/><hr/><hr/><hr/>
</body>
</html>

<?php
require('library.php');
$lib= new library();
if(isset($_POST['simpan'])){
	$nama=$_POST['nama'];
	$jenisKelamin= $_POST['jenisKelamin'];

	$minat;
	if(!empty($_POST['minat1'])){
		$minat= $minat.'1,';
	}
	if(!empty($_POST['minat2'])){
		$minat= $minat.'2,';
	}
	if(!empty($_POST['minat3'])){
		$minat= $minat.'3,';
	}

	$citaCita= $_POST['citaCita'];
	$keterangan= $_POST['keterangan'];

	$add= $lib->add_dd($nama, $jenisKelamin, $minat, $citaCita, $keterangan);
	if($add=='Berhasil'){
		header('Location:index.php');
	}
}
?>