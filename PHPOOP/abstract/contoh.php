<?php
	//class abstrak memaksa anaknya untuk mengimplementasi method nya
	abstract class komputer{
		abstract public function lihat_spec();
		abstract public function lihat_processor();
		abstract public function lihat_harddisk();
		abstract public function lihat_pemilik();
	}
	class laptop extends komputer{
		function lihat_spec(){

		}
		function lihat_processor(){

		}
		function lihat_harddisk(){

		}
		function lihat_pemilik(){

		}
	}
	class notebook extends komputer{
		function lihat_spec(){

		}
		function lihat_processor(){

		}
		function lihat_harddisk(){

		}
		function lihat_pemilik(){
			
		}
	}
?>