<?php
	class komputer{
		public function __construct(){
			echo "Constructor dari class komputer <br/>";
		}
		public function __destruct(){
			echo "Destructor dari class komputer <br/>";
		}
	}
	class laptop extends komputer{
		public function __construct(){
			echo "Constructor dari kelas laptop <br/>";
		}
		public function __destruct(){
			echo "Destuctor dari kelas laptop <br/>";
		}
	}
	class chromebook extends laptop{
		public function __construct(){
			echo "Constructor dari kelas chromebook  <br/>";
		}
		public function __destruct(){
			echo "Destructor dari kelas chromebook <br/>";
		}
	}
	$gadget_baru= new chromebook();

	echo "Belajar OOP PHP <br/>";
?>