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
	<form method="POST" action="tambah.php">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label><br/>
			<label class="radio-inline"><input type="radio" name="jenisKelamin" value="L">Laki Laki</label>
			<label class="radio-inline"><input type="radio" name="jenisKelamin" value="P">Perempuan</label>
		</div>
		<div class="form-group">
			<label>Minat</label><br/>
			<label class="checkbox-inline"><input type="checkbox" value="Pemrograman" name="minat1">Pemrograman</label>
			<label class="checkbox-inline"><input type="checkbox" value="Desain" name="minat2">Desain</label>
			<label class="checkbox-inline"><input type="checkbox" value="Jaringan" name="minat3">Jaringan</label>
		</div>
		<div class="form-group">
			<label>Cita Cita</label><br/>
			<select class="form-control" name="citaCita">
				<option>-- Pilih --</option>
				<option>Guru</option>
				<option>Dosen</option>
				<option>Programmer</option>
				<option>Desainer</option>
			</select>
		</div>
		<div class="form-group">
			<label>Keterangan</label><br/>
			<textarea name="keterangan" class="form-control" style="resize: none; height:150px;"></textarea>
		</div>
		<input type="submit" value="Simpan" class="btn btn-warning" name="simpan">
		<input type="reset" value="Reset" class="btn btn-info">
	</form>
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