<?php
	class laptop{
		public function hidupkan_laptop($pemilik, $merk){
			return "Hidupkan Laptop $merk punya $pemilik";
		}
	}
	$laptop_andi= new laptop();
	echo $laptop_andi->hidupkan_laptop("Andi", "lenovo");
?>