<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div class="container">
	<h2 align="center">Aplikasi CRUD Dasar</h2>
		<form method="POST" action="aksi.php">
			<a href="index.php">Beranda</a>
			<hr/>
			<div class="col-sm-4" style="border:1px solid #eee;">
				<br/>
				<div class="form-group">
					<label for="nama">Masukkan namamu</label>
					<input type="text" id="nama" class="form-control" name="nama" required>
				</div>
				<hr/>
				<div class="form-group">
					<label>Jenis Kelamin Anda</label><br/>
					<label class="radio-inline"><input type="radio" value="L" name="jenis_kelamin" required>Laki Laki</label>
					<label class="radio-inline"><input type="radio" value="P" name="jenis_kelamin" required>Perempuan</label>
				</div>
				<hr/>
				<div class="form-group">
					<label>MinatMu</label><br/>
					<label class="checkbox-inline"><input type="checkbox" value="Pemrograman" name="minat1">Pemrograman</label>
					<label class="checkbox-inline"><input type="checkbox" value="Desain" name="minat2">Desain</label>
					<label class="checkbox-inline"><input type="checkbox" value="Jaringan" name="minat3">Jaringan</label>
				</div>
				<hr/>
				<div class="form-group">
					<label for="cita_cita">Cita Cita</label>
					<select class="form-control" id="cita_cita" name="cita_cita">
						<option>-- Pilih --</option>
						<option>Guru</option>
						<option>Dosen</option>
						<option>Programmer</option>
						<option>Desainer</option>
					</select>
				</div>
				<hr/>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<textarea id="keterangan" class="form-control" rows="5" style="resize:none;" name="keterangan"></textarea>
				</div>
				<hr/>
				<input type="submit" value="Simpan" class="btn btn-info" name="simpan" id="submit">
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