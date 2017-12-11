<?php
	class komputer{
		protected function beli_komputer(){
			return "Beli Komputer Baru";
		}
	}
	class laptop extends komputer{
		protected function beli_laptop(){
			return "Beli Laptop baru";
		}
	}
	class chromebook extends laptop{
		protected function beli_chromebook(){
			return "Beli chromebook baru";
		}
		public function beli_semua(){
			$a= $this->beli_komputer();
			$b= $this->beli_laptop();
			$c= $this->beli_chromebook();
			return "$a <br/> $b <br/> $c";
		}
	}
	$gadget_baru= new chromebook();
	echo $gadget_baru->beli_semua();
?>