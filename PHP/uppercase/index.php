<?php
	$tulisan1= 'tEGar sWaSono'.'<br/>';
	echo strtoupper($tulisan1);
	echo strtolower($tulisan1);
	
	$huruf_awal_besar= ucwords(strtolower($tulisan1));
	echo $huruf_awal_besar;

	echo '<br/>';
	echo lcfirst($tulisan1);
	echo ucwords($tulisan1);

?>