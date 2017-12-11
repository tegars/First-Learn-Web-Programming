<?php
	include 'koneksi.php';

	$aksi=$_GET['aksi'];
	if($aksi=='simpan'){
		simpan();
	}
	if($aksi=='hapus'){
		hapus();
	}
	if($aksi=='update'){
		update();
	}


	function simpan(){
		$siswa_nis=$_POST['siswa_nis'];
		$siswa_nama=$_POST['siswa_nama'];
		$siswa_kelas=$_POST['siswa_kelas'];
		$siswa_jurusan=$_POST['siswa_jurusan'];

		mysql_query("INSERT INTO `siswa`(`siswa_nis`, `siswa_nama`, `siswa_kelas`, `siswa_jurusan`) VALUES ('$siswa_nis','$siswa_nama','$siswa_kelas','$siswa_jurusan')");
	}
	function hapus(){
		$id= $_POST['id'];
		mysql_query("DELETE FROM siswa WHERE siswa_id='$id'; ");

	}
	function update(){
		$siswa_id= $_POST['siswa_id'];

		$siswa_nis=$_POST['siswa_nis'];
		$siswa_nama=$_POST['siswa_nama'];
		$siswa_kelas=$_POST['siswa_kelas'];
		$siswa_jurusan=$_POST['siswa_jurusan'];

		mysql_query("UPDATE `siswa` SET `siswa_nis`='$siswa_nis',`siswa_nama`='$siswa_nama',`siswa_kelas`='$siswa_kelas',`siswa_jurusan`='$siswa_jurusan' WHERE `siswa_id`='$siswa_id';  ");
	}
?>