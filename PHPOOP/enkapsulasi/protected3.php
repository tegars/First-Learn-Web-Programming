<?php
	class komputer{
		protected $jenis_processor="Intel Core i7-4790 3.6Ghz";
	}
	class laptop extends komputer{
		public function tampilkan_processor(){
			return $this->jenis_processor;
		}
	}
	$laptop_baru= new laptop();
	echo $laptop_baru->tampilkan_processor();
?>