<!DOCTYPE html>
<html>
<head>
	<title>Metode Pengiriman</title>
</head>
<body>
	<h2>Method GET</h2>
	<ol>
		<li>Pada Form</li><br/>
		<form name="form1" action="page2.php" method="get">
			Nama anda: <input type="text" name="nama"><br/><br/>
			Pilihan: 
			<select name="mobil">
				<option value="toyota">Toyota</option>
				<option value="honda">Honda</option>
			</select>
			<input type="submit" name="simpan" value="Disimpan">
			<input type="reset" name="reset" value="Reset">
		</form>

		<br/>
		<li>Tanpa Form - Dengan Kembalian True false - isset($_GET['coba'])</li>
		<a href="page2.php?coba=abc">Menuju Page 2</a>
		<br/><br/>
		<li>Tanpa Form - Dengan Kembalian value - $_GET['coba']</li>
		<a href="page2.php?coba1=tes1&coba2=tes2">Menuju Page 2</a>

	</ol>
	<hr/>

	<h2>Method POST</h2>
	<h5>hanya bisa digunakan di dalam tag form</h5>
	<h2>1. </h2>
	<form name="form1" action="page3.php" method="post">
		Nama anda: <input type="text" name="nama"><br/><br/>
		Pilihan: 
			<select name="mobil">
				<option value="toyota">Toyota</option>
				<option value="honda">Honda</option>
			</select>
		<input type="submit" name="simpan" value="Disimpan">
		<input type="reset" name="reset" value="Reset">
	</form>
	<h2>2. </h2>
	Post inipun support - Kembalian True false - isset($_POST['coba'])
</body>
</html>