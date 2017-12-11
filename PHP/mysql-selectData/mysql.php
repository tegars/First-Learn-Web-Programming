<?php
	$host= 'localhost';
	$username= 'root';
	$password= '';
	$database= 'latihan';
	mysql_connect($host, $username, $password);
	mysql_select_db($database);


	#01 contoh 1
	$query= mysql_query("SELECT * FROM teman;");
	if(mysql_num_rows($query)==0){
		echo 'data kosong';
	}else{
		while($data= mysql_fetch_assoc($query)){
			echo $data['id'].' ';
			echo $data['nama'].' ';
			echo $data['alamat'].'<br/>';
		}
	}
	echo '<hr/>';


	#02 contoh 2
	$query2= mysql_query("SELECT nama FROM teman WHERE id=1");
	if(mysql_num_rows($query2)==0){
		echo 'data dengan ID ini tidak ada';
	}else{

		while($data= mysql_fetch_assoc($query2)){
			$ketemu= $data['nama'];
		}
		echo $ketemu;
	}
?>