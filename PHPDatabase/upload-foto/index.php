<!DOCTYPE html>
<html>
<head>
	<title>refrensiku-upload-foto</title>
</head>
<body>
<form action="upload1.php" method="post" enctype="multipart/form-data">
	pilih file:
	<input type="file" name="fileToUpload" id="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
</form>
<hr/>
<?php
    $host='localhost';
    $username= 'root';
    $password= '';
    $db= 'latihan';

    mysql_connect($host, $username, $password);
    mysql_select_db($db);
?>

<table border="1" style="border-collapse:collapse;">
<tr>
	<th>ID</th>
	<th>NAMA</th>
</tr>
<?php
	$query= mysql_query("select * from upload_gambar;");
	if(mysql_num_rows($query)==0){
		echo 'Data kosong';
	}else{
		while($data= mysql_fetch_assoc($query)){
			echo '<tr>';
			echo '<td>'.$data['id'].'</td>';
			echo '<td><img src="uploads/'.$data['foto'].'" width="100" height="50"></td>';
			echo '</tr>';
		}
	}
?>
</table>
</body>
</html>