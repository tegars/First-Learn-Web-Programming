<?php
	//misalkan gini buat objeck Orang yang memiliki properti atau attibute
	//warnaRambut, tinggi 
	//dan memiliki method Berlari dengan parameter kecepatan, dengan hasil, lari sedang, cepat, atau biasa
	
	class orang{
		public $warnaRambut;
		public $tinggi;

		public function berlari($kecepatan){
			return $kecepatan;
		}
	}

	//buat object
	$andi= new orang();
	$andi->warnaRambut="hitam";
	$andi->tinggi="165";

	echo $andi->warnaRambut;
	echo '<br/>';
	echo $andi->berlari("lari sedang");
?>