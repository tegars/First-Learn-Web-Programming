<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jurusan=$_POST['jurusan'];
$tahun=$_POST['tahun'];
$photo=$_FILES['photo']['name'];
$uploaddir="upload/";
if(!empty($_FILES['photo']['tmp_name'])){
  //jika file di upload	
  if(is_uploaded_file($_FILES['photo']['tmp_name'])){
	  move_uploaded_file($_FILES['photo']['tmp_name'],$uploaddir.$_FILES['photo']['name']);
	  include('koneksi.php');
	  $update=mysql_query("UPDATE mahasiswa SET nama='$nama',alamat='$alamat',jurusan='$jurusan',tahun='$tahun',photo='$photo' WHERE nim='$nim'");
	  if($update){
		header("location:index.php");  
	  }
  }
}
else{
	//jika file tidak di upload
	echo "TIDAK ADA FILE YANG ANDA PILIH";
}
?>