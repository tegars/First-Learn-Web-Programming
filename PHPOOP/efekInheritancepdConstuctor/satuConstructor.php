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

	}
	class chromebook extends laptop{

	}
	$gadget_baru= new chromebook();

	echo "Belajar OOP PHP <br/>";
?>