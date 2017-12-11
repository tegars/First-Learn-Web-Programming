<?php
	class laptop{
		protected $pemilik;
		protected function hidupkan_laptop(){
			return "Hidupkan Laptop";
		}
	}

	$laptop_anto= new laptop();
	//ini pasti eror karena hak akses nya berupa protected
	$laptop_anto->pemilik="Anto";
	echo $laptop_anto->pemilik;
	echo $laptop_anto->hidupkan_laptop;
?>