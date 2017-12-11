<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<?php
		include('koneksi.php');
		$simpan= $_GET['id'];
		$query= mysql_query("select * from data_diri where id='$simpan'; ");
		$data= mysql_fetch_assoc($query);
	?>
	<div class="container">
	<h2 align="center">Aplikasi CRUD Dasar</h2>
		<form method="POST" action="aksi.php">
			<input type="hidden" name="id" value=<?php echo '"'.$data['id'].'"' ?>>
			<a href="index.php">Beranda</a>
			<hr/>
			<div class="col-sm-4" style="border:1px solid #eee;">
				<br/>
				<div class="form-group">
					<label for="nama">Masukkan namamu</label>
					<input type="text" id="nama" class="form-control" name="nama" required value=<?php echo '"'.$data['nama'].'"' ?>>
				</div>
				<hr/>
				<div class="form-group">
					<label>Jenis Kelamin Anda</label><br/>
					<label class="radio-inline"><input type="radio" value="L" name="jenis_kelamin" required 
					<?php if($data['jenis_kelamin']=='L')echo 'checked' ?>>Laki Laki</label>
					<label class="radio-inline"><input type="radio" value="P" name="jenis_kelamin" required
					<?php if($data['jenis_kelamin']=='P')echo 'checked' ?>
					>Perempuan</label>
				</div>
				<hr/>
				 <?php //echo $data['minat'] ?>
				<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function(){
						var minat= '<?php echo $data['minat'] ?>';
						var minat1= minat.split(',');
						for(var a=0; a<minat1.length; a++){
							console.log(minat1[a]);
							if(minat1[a]==1){
								$('#pemrograman').attr({
									'checked':''
								});
							}
							if(minat1[a]==2){
								$('#desain').attr({
									'checked':''
								});
							}
							if(minat1[a]==3){
								$('#jaringan').attr({
									'checked':''
								});
							}
						}
					});
				</script>

				<div class="form-group">
					<label>MinatMu</label><br/>
					<label class="checkbox-inline"><input type="checkbox" value="Pemrograman" name="minat1" id="pemrograman">Pemrograman</label>
					<label class="checkbox-inline"><input type="checkbox" value="Desain" name="minat2" id="desain">Desain</label>
					<label class="checkbox-inline"><input type="checkbox" value="Jaringan" name="minat3" id="jaringan">Jaringan</label>
				</div>
				<hr/>
				<div class="form-group">
					<label for="cita_cita">Cita Cita</label>
					<select class="form-control" id="cita_cita" name="cita_cita">
						<option>-- Pilih --</option>
						<option <?php if($data['cita_cita']=='Guru') echo 'selected' ?> >Guru</option>
						<option <?php if($data['cita_cita']=='Dosen') echo 'selected' ?> >Dosen</option>
						<option <?php if($data['cita_cita']=='Programmer') echo 'selected' ?> >Programmer</option>
						<option <?php if($data['cita_cita']=='Desainer') echo 'selected' ?> >Desainer</option>
					</select>
				</div>
				<hr/>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea id="keterangan" class="form-control" rows="5" style="resize:none;" name="keterangan"><?php echo $data['keterangan'] ?></textarea>
				</div>
				<hr/>
				<input type="submit" value="Update" class="btn btn-info" name="update" id="submit">
				<input type="reset" value="reset" class="btn btn-danger">
			</div>
		</form>
	</div>
	<hr/>
	<hr/>
	<hr/>
	<hr/>
	<script type="text/javascript">
		$(document).ready(function(){

			$("#submit").click(function(){

				if($("#cita_cita").val()==='-- Pilih --'){
					alert('Data belum lengkap');
					return false;
				}


			});

		});
	</script>
</body>
</html>