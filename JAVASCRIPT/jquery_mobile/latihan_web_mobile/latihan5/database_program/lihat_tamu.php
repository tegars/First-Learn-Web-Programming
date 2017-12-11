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
<div data-role="page" id="lihatTamu">
  <div data-role="header">
    <h1>Tampil Data Tamu</h1>
  </div>
  <div data-role="content">
    <?php
	include('koneksi.php');
	$query=mysql_query("SELECT * FROM bukutamu");
	while($ambil_data=mysql_fetch_array($query)){
	$nama=$ambil_data['nama'];
	$alamat=$ambil_data['alamat'];
	$email=$ambil_data['email'];
	$komentar=$ambil_data['komentar'];
	echo'
	<ul data-role="listview" data-inset="true">
	  <li>
	    <div style="text-align:left;float:left;margin-right:5px;margin-top:5px;">
		  <p>
		  Nama :<br />
		  Alamat :<br />
		  Email :<br />
		  Komentar :<br />
		  </p>
		</div>
		<div style="text-align:left;">
		  <p>
		  '.$nama.'<br />
		  '.$alamat.'<br />
		  '.$email.'<br />
		  '.$komentar.'<br />
		  </p>
		</div>
	  </li>
	</ul>
	';
	}
	?>
  </div>
  <div data-role="footer">
     <h1>&copy;Copyright 2014</h1>
  </div>
</div>
</body>
</html>