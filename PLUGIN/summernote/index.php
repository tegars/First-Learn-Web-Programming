<!DOCTYPE html>
<html>
<head>
	<title>summernote</title>
	<!-- include libraries(jQuery, bootstrap) -->
	<link href="bahan/bootstrap.min.css" rel="stylesheet">
	<script src="bahan/jquery.min.js"></script> 
	<script src="bahan/bootstrap.min.js"></script>

	<!-- include summernote css/js-->
	<link href="bahan/summernote.css" rel="stylesheet">
	<script src="bahan/summernote.min.js"></script>

	<!-- include summernote css/js-->
<!-- 	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script> -->


</head>
<body>
<hr/>
<h2 align="center">Summernote</h2>
<hr/>
<div class="container">
	<form action="index.php" method="post">
		<div class="row">
			<div class="col-sm-7"><textarea id="summernote" name="artikel"></textarea></div>
			<div class="col-sm-5">
				<button class="btn btn-success" name="simpan" type="submit">Simpan MySQL</button>
				<button class="btn btn-warning" type="reset">Reset</button>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#summernote').summernote();
	});
</script>
</body>
</html>
<?php
if(isset($_POST['artikel'])){
	$coretan= $_POST['artikel'];
	mysql_connect('localhost', 'root', '');
	mysql_select_db('MyPlugin');
	$cek= mysql_query("insert into summernote(coretan) values('$coretan');");
	if(!$cek){
		echo 'gagal';
	}else{
		echo 'artikel berhasil tersimpan';
	}
}
?>