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
<div data-role="page" id="home">
  <div data-role="header">
    <h1>Buku Tamu</h1>
  </div>
  <div data-role="content">
    <p>Selamat datang di web saya</p>
    <a href="#isiTamu" data-rel="dialog" data-role="button" data-icon="edit">Isi buku tamu</a>
    <a href="lihat_tamu.php" data-rel="external" data-role="button" data-icon="info">Lihat Buku tamu</a>    
  </div>
  <div data-role="footer">
    <h1>&copy; Copyright 2014</h1>
  </div>
</div>

<div data-role="page" id="isiTamu">
  <div data-role="header">
    <h1>Isi buku tamu</h1>
  </div>
  <div data-role="content">
    <form id="formTamu" name="formTamu" method="post" action="simpan_tamu.php">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" placeholder="Isi nama Anda...." />
      <label for="alamat">Alamat:</label>
      <textarea id="alamat" name="alamat" placeholder="Isi alamat Anda..."></textarea>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="my_email@mymail.com" />
      <label for="komentar">Komentar:</label>
      <textarea id="komentar" name="komentar" placeholder="Isi komentar Anda..."></textarea>
      <button type="submit" id="simpan" name="simpan" data-icon="check">Simpan</button>
    </form>
  </div>
  <div data-role="footer">
    <h1>&copy; Copyright 2014</h1>
  </div>
</div>
</body>
</html>