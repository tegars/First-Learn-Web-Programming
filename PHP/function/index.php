<!DOCTYPE html>
<html>
<head>
	<title>function</title>
</head>
<body>
<?php
	#01 fungsi tunggal
	function fungsi1(){
		echo 'fungsi1';
	}
	fungsi1();

	#02 fungsi dengan return
	function fungsi2(){
		return 'fungsi2';
	}
	echo fungsi2();

	#03 fungsi dengan argument
	function fungsi3($tulisan){
		echo $tulisan;
	}
	fungsi3('fungsi3');

	#04 fungsi dengan argument bernilai = tujuan nya adalah memberikan nilai default bila argument di kosongi oleh user
	function fungsi4($tulisan= 'tegar'){
		echo $tulisan;
	}
	fungsi4();
	fungsi4('swasono');

	#05 Akses Variabel Global
	$a=5;
	function tes(){
		$a= $GLOBALS['a'];
		echo $a;
	}
	tes();
?>
</body>
</html>