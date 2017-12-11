<!DOCTYPE html>
<html>
<head>
	<title>String</title>
</head>
<body>
<?php
	#01 count String
	echo strlen('tegar swa');				//output 9
	echo str_word_count('tegar swa');		//output 2
	echo strpos('tegar swa', 'swa');		//output 6

	echo '<hr/>';


	#02 Append String
	$nama= 'tegar';
	$nama= $nama.'swasono';
	echo $nama;

	echo '<hr/>';


	#03 Explode dengan batas spasi
	$kalimat= 'satu dua tiga empat lima';
	$arr_kalimat= explode (' ',$kalimat);
	// echo var_dump ($arr_kalimat).length;
	// echo $arr_kalimat.length;
	echo $arr_kalimat[0];
	echo $arr_kalimat[1];

?>
</body>
</html>