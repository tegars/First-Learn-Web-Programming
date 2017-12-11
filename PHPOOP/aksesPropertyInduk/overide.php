<?php
	class komputer{
		public function lihat_spek(){
			return "Spec Komputer: Acer, processor Intel core i7, Ram 4GB";
		}
	}
	class laptop extends komputer{
		public function lihat_spek(){
			return "Spec Laptop: Asus, Processor Intel core i5, Tam 2GB";
		}
		public function lihat_spek_komputer(){
			//inilah untuk mengatasi overiding
			return parent::lihat_spek();
		}
	}
	$gadget_baru= new laptop();
	echo $gadget_baru->lihat_spek();
	echo '<br/>';
	echo $gadget_baru->lihat_spek_komputer();
?>