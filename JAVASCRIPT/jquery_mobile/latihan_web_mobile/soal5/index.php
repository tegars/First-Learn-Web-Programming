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
<div data-role="page">
  <div data-role="header">
   <h1>Aplikasi Data Mahasiswa</h1>
    <a href="index.php" data-ajax="false" data-icon="home" data-iconpos="notext"></a>
    <a href="#" data-rel="external" data-icon="info" data-iconpos="notext"></a>  
  </div>
  <div data-role="content">
    <a href="tambah_data.php" data-rel="external" data-role="button" data-inline="true" data-icon="plus">Tambah Data</a>
    <table data-role="table" data-mode="columntoggle" class="ui-body-c ui-shadow table-stripe ui-responsive" data-column-btn-text="Columns to display...">
      <thead class="ui-bar-a">
        <tr>
          <th>NO</th>
          <th>PHOTO</th>
          <th>NIM</th>
          <th data-priority="4">NAMA</th>          
          <th data-priority="4">JURUSAN</th>
          <th data-priority="4">TAHUN</th>
          <th>TOOLS</th>   
        </tr>
      </thead>
      <tbody>
        <?php
		  include('koneksi.php');
		  $i=0;
		  $query=mysql_query("SELECT * FROM mahasiswa");
		  while($hasil_query=mysql_fetch_array($query)){
			  $nim=$hasil_query['nim'];
        	  $nama=$hasil_query['nama'];
		      $alamat=$hasil_query['alamat'];
		      $jurusan=$hasil_query['jurusan'];
		      $tahun=$hasil_query['tahun'];
		      $photo=$hasil_query['photo'];			  			  
			  $i++;
			  echo'
        <tr>
          <th>'.$i.'</th>
          <th><img src="upload/'.$photo.'" width="80" height="100"></th>
          <th>'.$nim.'</th>
          <th>'.$nama.'</th>          
          <th>'.$jurusan.'</th>
          <th>'.$tahun.'</th>
          <th>
		    <a href="edit_data.php?nim='.$nim.'" data-role="button" data-icon="edit" data-iconpos="notext" data-inline="true"></a>
		    <a href="hapus_data.php?nim='.$nim.'" data-role="button" data-icon="delete" data-iconpos="notext" data-inline="true"></a>			
		  </th>   
        </tr>			  
			  ';
		  }
		?>
      </tbody>
    </table>
  </div>
  <div data-role="footer">
    <h1>&copy;Copyright 2014</h1>
  </div>
</div>
</body>
</html>