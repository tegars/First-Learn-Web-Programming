<?php
	$conek= mysql_connect('localhost','root','');
	$db= mysql_select_db('latihan');
	session_start();

	if($_COOKIE['login_username']){
		echo 'berhasil login';
	}else{
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login with Session</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid" style="background-color:#eee; height:100px;"><h2 align="center">Header - <i><?php echo $_COOKIE['login_username'] ?></i></h2></div>
<hr/>
<div class="container-fluid" style="height:300px;" align="center">
	<b id="logout"><a href="logout.php" class="btn btn-danger">Log Out</a></b>
</div>
</body>
</html>