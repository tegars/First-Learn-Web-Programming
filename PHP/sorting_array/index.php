<!DOCTYPE html>
<html>
<head>
	<title>sorting_array</title>
</head>
<body>
<?php
	#sort()						ascending
	#rsort()					descending
	#asort()					ascending, according to the value
	#ksort()					ascending, according to the key/Index
	#arsort()					descending, according to the value

	#krsort()					descending, according to the key/Index


	#01 sort()
	$nama= array('tegar', 'swasono', 'tatag');
	sort($nama);
	foreach($nama as $data){
		echo $data;
	}


	#02 rsort()
	$angka= array(4,2,3,7,5,9,5);
	rsort($angka);
	foreach($angka as $data){
		echo $data;
	}


	echo '<hr/>';
	#03 asort()
	$saya= array('awal'=>'tegar', 'akhir'=>'swasono', 'panggilan'=>'tatag');
	asort($saya);
	foreach($saya as $key => $value){
		echo $key.' '.$value.'<br/>';
	}


	echo '<hr/>';
	#04 ksort()
	ksort($saya);
	foreach($saya as $key => $value){
		echo $key.' '.$value.'<br/>';
	}


	echo '<hr/>';
	#05 arsort()
	arsort($saya);
	foreach($saya as $key => $value){
		echo $key.' '.$value.'<br/>';
	}


	echo '<hr/>';
	#06 krsort()
	krsort($saya);
	foreach($saya as $key => $value){
		echo $key.' '.$value.'<br/>';
	}
?>
</body>
</html>