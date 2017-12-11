<?php
$username=$_POST['username'];
$password=$_POST['password'];
if($username=="maxikom"&&$password=="1234"){
echo'
<div data-role="page" id="successPage">
  <div data-role="header">
    <h1>My Mobile Web</h1>
  </div>
  <div data-role="content">
     <p><h3>Selamat datang</h3>
	 Anda telah berhasil login<br />Klik <a href="index.html">disini</a>untuk kembali ke halaman login</p>
  </div>
  <div data-role="footer">
    <h1>&copy;Copyright 2014</h1>
  </div>
</div>
';	
}
else{
echo'
<div data-role="page">
  <div data-role="header">
    <h1>My Mobile Web</h1>
  </div>
  <div data-role="content">
    <p><h3>Login Gagal...!</h3>
	Klik <a href="#" data-rel="back">disnini</a>Untuk kembali
	</p>
  </div>
  <div data-role="footer">
    <h1>&copy;Copyright 2014</h1>
  </div>
</div>
';	
}
?>