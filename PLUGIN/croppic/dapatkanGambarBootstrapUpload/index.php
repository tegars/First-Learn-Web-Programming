<!DOCTYPE html>
<html>
<head>
	<title>Dapatkan gambar + bootstrap</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.cropit.js"></script>
	<style type="text/css">
		.cropit-image-preview{
			background-color: #f8f8f8;
			background-size: cover;
			border: 1px solid #ccc;
			border-radius: 3px;
			margin-top: 7px;
			width: 250px;
			height: 250px;
			cursor: move;
		}
	</style>
</head>
<body>
<hr/><hr/>
<div class="container">
	<a class="btn btn-warning btn-sm" href="home.html">Beranda/ Home</a>
	<hr/>
	<form method="post" action="index.php" enctype="multipart/form-data">
	<div class="image-editor">
		<input type="file" class="cropit-image-input" name="foto">
		<input class="cropit-image-preview" name="fotoJadi" readonly>

		<input type="range" class="cropit-image-zoom-input" style="width: 250px;">
		<button id="cetak" class="btn btn-info btn-sm" type="submit" name="simpan">Simpan</button>
	</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.image-editor').cropit({
			imageState:{src:''}
		});

		$('#cetak').click(function(){
			var imageData= $('.image-editor').cropit('export');
			// window.open(imageData);
			
		});
	});
</script>
</body>
</html>
<?php
// 	if(isset($_POST['simpan'])){
// 		$fotoJadi= $_POST['fotoJadi'];
// 		echo $fotoJadi;

// 		$target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fotoJadi"]["name"]);
// $uploadOk = 1;
// $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// #05 Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["fotoJadi"]["tmp_name"], $target_file)) {
//         echo "The file ". basename( $_FILES["fotoJadi"]["name"]). " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }
// 	}
?>