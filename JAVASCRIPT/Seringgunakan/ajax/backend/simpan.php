<?php 
$nama= $_GET['nama'];
$alamat= $_GET['alamat'];
include('koneksi.php');
if($conn->query("INSERT INTO teman(nama, alamat) VALUES('$nama','$alamat');")){
	echo 'berhasil simpan';
}else{
	echo 'gagal';
}
?>