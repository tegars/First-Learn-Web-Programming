<?php
	//OBJEK SEBAGAI ENTITAS TERPISAH
	//maksudnya 1 kelass dapat di gunakan banyak objek
	class laptop{
		var $pemilik;
		function hidupkan_laptop(){
			return "hidupkan_laptop";
		}
	}
	$laptop_anto= new laptop();
	$laptop_andi= new laptop();
	$laptop_dina= new laptop();

	$laptop_anto->pemilik="Anto";
	$laptop_andi->pemilik="Andi";
	$laptop_dina->pemilik="Dina";

	echo $laptop_anto->pemilik;
	echo '<br/>';
	echo $laptop_andi->pemilik;
	echo '<br/>';
	echo $laptop_dina->pemilik;
	echo '<br/>';

?>