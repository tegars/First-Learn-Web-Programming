<?php
	$get1= $_GET['nama'];
	$get2= $_GET['simpan'];
	$get3= $_GET['mobil'];
	echo $get1.'<br/>';
	echo $get2.'<br/>';
	echo $get3;

	//kembalian ini berupa true false yaitu angka 1 dan 0
	$kondisi1= isset($_GET['coba']);
	if($kondisi1){
		echo 'true yaitu<br/>';
		echo $_GET['coba'];
	}

	//ini mendapatkan value
	echo $_GET['coba1'];
	echo '<br/>';
	echo $_GET['coba2'];

?>