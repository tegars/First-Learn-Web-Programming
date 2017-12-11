<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" type="text/css" href="jquery.mobile-1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="jquery/jquery-1.8.3.min.js"></script>
<script src="jquery.mobile-1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>

<body>
<?php
include('koneksi.php');
$nim=$_GET['nim'];
$query=mysql_query("SELECT * FROM mahasiswa WHERE nim='$nim'");
$hasil_query=mysql_fetch_array($query);
$nama=$hasil_query['nama'];
$alamat=$hasil_query['alamat'];
$jurusan=$hasil_query['jurusan'];
$tahun=$hasil_query['tahun'];
?>
<div data-role="page">
  <div data-role="header">
    <a href="#" data-rel="back" data-icon="back">Kembali</a>
    <h1>Edit Data Mahasiswa</h1>
  </div>
  <div data-role="content">
    <form name="formTambah" id="formTambah" method="post" action="simpan_edit.php" data-ajax="false" enctype="multipart/form-data">
      <div data-role="fieldcontain">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" placeholder="Isi NIM Mahasiswa...." required="required" value="<?php echo $nim ?>" class="ui-disabled" />
      </div>
      <div data-role="fieldcontain">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" placeholder="Isi Nama Mahasiswa..." required="required" value="<?php echo $nama ?>" />
      </div>
      <div data-role="fieldcontain">
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" placeholder="Isi Alamat Mahasiswa..." required="required"><?php echo $alamat ?></textarea>
      </div>
      <div data-role="fieldcontain">
        <label for="nim">Jurusan:</label>
        <select name="jurusan" id="jurusan" data-native-menu="false">
          <option value="Manajemen Informatika">Manajemen Informatika</option>
          <option value="Teknik Informatika">Teknik Informatika</option>        
          <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>        </select>
      </div>
      <div data-role="fieldcontain">
        <label for="tahun">Tahun:</label>
        <input type="text" name="tahun" id="tahun" placeholder="Isi Tahun Masuk..." required="required" value="<?php echo $tahun; ?>" />
      </div>
      <div data-role="fieldcontain">
        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo" required="required" />
      </div>
      <button type="submit" data-icon="check">Simpan</button>      
    </form>
  </div>
  <div data-role="footer">
    <h1>&copy;Copyright 2014</h1>
  </div>
</div>
</body>
</html>