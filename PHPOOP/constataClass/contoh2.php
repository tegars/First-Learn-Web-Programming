<?php
	//di akses dari class sendiri
	class laptop{
		const dollar= '12000';
		public function beli_laptop($harga){
			return "Beli komputer baru, Rp. ".$harga*self::dollar;
		}
	}
	$laptop_baru= new laptop();
	echo $laptop_baru->beli_laptop(400);
?>