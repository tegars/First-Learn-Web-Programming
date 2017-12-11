<?php
	class komputer{
		private $jenis_processor= 'Intel Core i7-47909 3.6Ghz';
		public function tampilkan_processor(){
			return $this->jenis_processor;
		}
	}
	class laptop extends komputer{
		public function tampilkan_processor(){
			return $this->jenis_processor;
		}
	}
	$komputer_baru= new komputer();
	$laptop_baru= new laptop();

	echo $komputer_baru->tampilkan_processor();
	//ini eror karena private hanya bisa di akses oleh class itu sendiri
	echo $laptop_baru->tampilkan_processor();
?>