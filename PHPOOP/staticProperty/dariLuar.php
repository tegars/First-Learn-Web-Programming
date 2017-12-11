<?php
	class laptop{
		public $merk;
		public $pimilik;
		public static $harga_beli;

		public static function beli_laptop(){
			return "Beli Laptop";
		}
	}
	laptop::$harga_beli=4000000;
	echo "Harga beli : Rp. ".laptop::$harga_beli;
	echo '<br/>';
	echo laptop::beli_laptop();
?>