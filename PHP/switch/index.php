<!DOCTYPE html>
<html>
<head>
	<title>switch</title>
</head>
<body>
<?php
	$pilihan='tegar';

	switch($pilihan){
		case 'swasono': echo 'value berupa swasono'; break;
		case 'tegar': echo 'value berupa tegar'; break;
		case 'tatag': echo 'value berupa tatag'; break;
		default: echo 'tidak ada pilihan'; break;
	}

?>
</body>
</html>