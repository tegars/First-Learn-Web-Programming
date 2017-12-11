<?php
include('koneksi.php');
$nim=$_GET['nim'];
$hapus=mysql_query("DELETE FROM mahasiswa WHERE nim='$nim'");
header("location:index.php");
?>