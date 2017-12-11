<!DOCTYPE html>
<html>
<head>
	<title>array-multi</title>
</head>
<body>
<?php
#array 2 dimension - array of array
$nama= array(
	array('tegar', 'pagelaran'),
	array('swasono', 'gondanglegi'),
	array('tatag', 'kademangan')
	);
$a=1;
foreach($nama as $data){
	echo $a;
	echo $data[0];
	echo $data[1].'<br/>';
	$a++;
}

#array 3 dimension - array of array of array
?>
</body>
</html>