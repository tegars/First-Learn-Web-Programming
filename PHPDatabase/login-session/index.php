<?php
	$conek= mysql_connect('localhost','root','');
	$db= mysql_select_db('latihan');
	session_start();

	if(isset($_POST['masuk'])){
		if(empty($_POST['username'])||empty($_POST['password'])){
			echo 'username dan atau password kosong';
		}else{
			$username= $_POST['username'];
			$password= $_POST['password'];

			//ini untuk mencegah sql injection
			$username= stripcslashes($username);
			$password= stripcslashes($password);
			$username= mysql_real_escape_string($username);
			$password= mysql_real_escape_string($password);

			$query= mysql_query("select * from login where username='$username' AND password='$password'; ");
			$rows= mysql_num_rows($query);

			if($rows==1){
				$_SESSION['login_username']= $username;
				header('location: home.php');
			}else{
				echo 'username atau password salah';
			}
		}
	}
	if(isset($_POST['daftar'])){
		if(empty($_POST['username'])||empty($_POST['password'])){
			echo 'data tidak boleh kosong';
		}
		else{
			$username= $_POST['username'];
			$password= $_POST['password'];

			$query= mysql_query("INSERT INTO `login`(`username`, `password`) VALUES ('$username', '$password');");
			
			if($query){
				echo 'berhasil menambah username';
			}
			else{
				echo 'gagal';
			}



		}
	}

	if(isset($_SESSION['login_username'])){
		header('location:home.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 align="center">Silahkan anda login</h2>
		<hr/>
		<form action="" method="post">
			<input type="text" name="username" placeholder="tulis username disini" class="form-control"><br/>
			<input type="password" name="password" placeholder="tulis password disini" class="form-control"><br/>
			<input type="submit" name="masuk" value="Masuk" class="btn btn-info"> <input type="reset" value="Reset" class="btn btn-danger">
		</form>
	</div>
	<hr/>
	<div class="container">
		<h5>Silahkan anda daftar bila belum memiliki akun</h5>
		<form action="" method="post">
			<input type="text" name="username" placeholder="tulis username disini" class="form-control"><br/>
			<input type="password" name="password" placeholder="tulis password disini" class="form-control"><br/>
			<input type="submit" name="daftar" value="Daftar" class="btn btn-info"> <input type="reset" value="Reset" class="btn btn-danger">
		</form>
	</div>
	

</body>
</html>