<?php
	class komputer{
		const dollar='11000';
	}
	class laptop extends komputer{
		const dollar='12000';
		public function beli_komputer($harga){
			return "Beli Komputer Baru, Rp.".$harga*parent::dollar;
		}

		public function beli_laptop($harga){
			return "Beli komputer baru, Rp.".$harga*self::dollar;
		}	

	}
	$laptop_baru= new laptop();
	echo $laptop_baru->beli_laptop(400);
	echo '<br/>';
	echo $laptop_baru->beli_komputer(400);
?>