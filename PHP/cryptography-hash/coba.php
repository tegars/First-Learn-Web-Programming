<?php
	$a=	'tegar';
	$hash = md5($a);

	$salt= 'swasono';
	$hash2 = md5($a . $salt);

	echo $hash;
	echo '<br/>';
	echo $hash2;
?>