<?php
	class latihan{
		public function coba1(){
			return 5;
		}
		public function coba2(){
			return $this->coba1();
		}
	}
	$tegar= new latihan();
	echo $tegar->coba2();
?>