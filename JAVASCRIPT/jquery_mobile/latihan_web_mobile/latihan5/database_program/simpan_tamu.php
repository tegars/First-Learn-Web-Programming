<?php
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
include('koneksi.php');
$query_simpan="INSERT INTO bukutamu VALUES('NULL','$nama','$alamat','$email','$komentar')";
$simpan=mysql_query($query_simpan);
if($simpan){
echo '
<div data-role="page">
  <script>
     location.href="buku_tamu.php";
  </script>
</div>
';	
}
else{
echo'
<div data-role="page">
  <p>Penyimpanan Gagal klik <a href="#" data-rel="back">disini</a> untuk kembali </p>
</div>
';	
}
?>