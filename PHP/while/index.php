<!DOCTYPE html>
<html>
<head>
	<title>while</title>
</head>
<body>
<?php
	#01 while
	$a=1;
	while($a<=5){
		echo $a;
		echo '<br/>';
		$a++;
	}

	echo '<hr/>';
	
	#02 do while
	$a=1;
	do{
		echo $a;
		echo '<br/>';
		$a++;
	}while($a<=5);
	
?>
</body>
</html>