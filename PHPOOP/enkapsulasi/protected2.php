<?php
	//agar protected bisa diakses oleh dirinya sendiri maka ditambahi this
	class laptop{
		protected $pemilik='Anto';
		
		public function akses_pemilik(){
			return $this->pemilik;
		}
		protected function hidupkan_laptop(){
			return "Hidupkan Laptop";
		}
		public function paksa_hidup(){
			return $this->hidupkan_laptop();
		}
	}

	$laptop_anto= new laptop();
	echo $laptop_anto->akses_pemilik();
	echo $laptop_anto->paksa_hidup();
?>