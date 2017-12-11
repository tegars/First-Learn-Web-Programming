<!DOCTYPE html>
<html>
<head>
	<title>advanced-include</title>
</head>
<body>
<?php
	#01 include - ketika file tidak ditemukan program tetap berjalan
	include 'header1.php22';
	echo 'walaupun eror program tetap jalan';

	#02 Require - ketika file tidak ditemukan program berhenti
	// require 'aheader1.php22';
	// echo 'program langsung terhenti';

?>
</body>
</html>