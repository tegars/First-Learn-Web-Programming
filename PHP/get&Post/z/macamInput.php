<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php
	if (isset($_POST['submit'])){
		?>
<h3>
		LATIHAN DARI BERBAGAI INPUTAN
	</h3>
	<form action="" method="POST">
		Nama <input type="text" name="nama">
		<input type="submit" value="Tes" name="submit">
	</form>

		<?php
		$namaku= $_POST['nama'];
		echo $namaku;
	}else{
	?>
<h3>
		LATIHAN DARI BERBAGAI INPUTAN
	</h3>
	<form action="" method="POST">
		Nama <input type="text" name="nama">
		<input type="submit" value="Tes" name="submit">
	</form>

	<?php	
	}
?>
<form action="" >

	
</form>


</body>
</html>