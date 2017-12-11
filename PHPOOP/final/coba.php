<?php
	class komputer{
		public $nama= "tegar";
		public function coba(){
			return $this->nama;
		}
	}
	class laptop extends komputer{
		public function lihat_spec(){
			$a= $this->nama;
			return "merk: $a";
		}
	}
	$tegar = new laptop();
	echo $tegar->lihat_spec();
?>