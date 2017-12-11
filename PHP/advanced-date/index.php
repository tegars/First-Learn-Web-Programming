<!DOCTYPE html>
<html>
<head>
	<title>advanced-date</title>
</head>
<body>
<?php
	#01 Date
	echo 'This is '.date('Y/m/d').'<br/>';
	echo 'This is '.date('y/m/d').'<br/>';
	echo 'This is '.date('Y.m.d').'<br/>';
	echo 'This is '.date('Y-m-d').'<br/>';
	echo 'This is '.date('l').'<br/>';

	echo '&copy; 2010 - '.date('Y');
	echo '<hr/>';

	#02 TIME
	echo 'The time is '.date('h:i:s a').'<br/>';

	#spesifikasi tempat
	date_default_timezone_set('America/New_York');
	echo 'this is america time '.date('h:i:s a');

	echo '<hr/>';

	#merubah menjadi format tanggal
	$d=strtotime("10:30pm April 15 2014");
	echo "Created date is " . date("Y-m-d h:i:sa", $d);

	echo '<hr/>';

	#batasan hari
	$startdate=strtotime("Saturday");
	$enddate=strtotime("+6 weeks",$startdate);

	while ($startdate <  $enddate) {
		echo date("M d", $startdate),"<br>";
		$startdate = strtotime("+1 week", $startdate);
	}


?>
</body>
</html>