<?php
	$post1= $_POST['nama'];
	$post2= $_POST['simpan'];
	$post3= $_POST['mobil'];
	echo $post1.'<br/>';
	echo $post2.'<br/>';
	echo $post3.'<br/><br/>';

	$coba_isset= isset($_POST['simpan']);
	if($coba_isset){
		echo "benar-hasil coba isset";
	}
	else{
		echo "salah-hasil coba isset";
	}
?>