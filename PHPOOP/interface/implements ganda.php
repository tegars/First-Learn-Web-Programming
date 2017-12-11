<?php
	interface tangan{
		public function pukul();
	}
	interface kaki{
		public function lari();
	}
	class kucing implements tangan,kaki{
		public function pukul(){
			return "sedang pukul";
		}
		public function lari(){
			return "sedang lari";
		}
	}
?>