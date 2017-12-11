<?php
	class laptop{
		public $pemilik="Andi";
		public $merk;
		public function hidupkan_laptop(){
			return "Hidupkan Laptop $this->pemilik";
		}
	}
	$laptop_baru= new laptop();
	echo $laptop_baru->hidupkan_laptop();	

	$laptop_baru->pemilik="Arie";
	echo $laptop_baru->hidupkan_laptop();

	$laptop_lama= new laptop();
	echo $laptop_lama->hidupkan_laptop();
?>