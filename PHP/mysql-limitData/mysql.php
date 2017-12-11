<?php
	$host= 'localhost';
	$username= 'root';
	$password= '';
	$database= 'latihan';
	mysql_connect($host, $username, $password);
	mysql_select_db($database);

	$limit= 4;
	//dimulai dari record ke tiga
	$offset=2;
	$query= mysql_query("SELECT * FROM teman LIMIT $limit OFFSET $offset;");
	if(mysql_num_rows($query)==0){
		echo 'Data Kosong';
	}else{

		while($data= mysql_fetch_assoc($query)){
			echo $data['id'].' ';
			echo $data['nama'].' ';
			echo $data['alamat'].'<br/>';
		}

	}

?>