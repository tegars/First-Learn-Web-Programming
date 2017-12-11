<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<script src="js/jquery-1.8.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
</head>
<body>
	<?php
		include("koneksi.php");
	?>
	<hr/>
	<h2 align="center">Aplikasi CRUD</h2>
	<hr/>

	<form method="POST" id="form-input">
		<table border="0" cellspacing="0">
			<tr>
				<td width="150">NIS</td>
				<td width="300">: <input type="text" name="nis" size="20" id="nis"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>: <input type="text" name="nama_lengkap" size="20" id="nama_lengkap"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>: 
					<select name="kelas" required id="kelas">
						<option value="">Pilih Kelas</option>
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>: 
					<select name="jurusan" required id="jurusan">
						<option value="">Pilih Jurusan</option>
						<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
						<option value="Multimedia">Multimedia</option>
						<option value="Akuntansi">Akuntansi</option>
						<option value="Perbankan">Perbankan</option>
						<option value="Pemasaran">Pemasaran</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<hr/>
					<input type="button" id="submit" value="Submit">
					<input type="reset" value="Reset"> 
					<input type="button" id="update" style="visibility: hidden;" value="Update">
					<input type="button" id="batal" style="visibility: hidden;background-color: red;" value="Batal Edit">
					
				</td>
			</tr>
		</table>
	</form>
	<hr/>
	

	<hr/>
	<h3>Data Mahasiswa</h3>
	<div id="data-mahasiswa"></div>

	<script type="text/javascript">
		$(document).ready(function(){

			//load data home mahasiswa
			var data_mh= "mahasiswa.data.php";
			$("#data-mahasiswa").load(data_mh);
			
			//simpan data
			$("#submit").click(function(e){
				e.preventDefault();

				var nis= $("#nis").val();
				var nama_lengkap= $("#nama_lengkap").val();
				var kelas= $("#kelas").val();
				var jurusan= $("#jurusan").val();

				var data = 'siswa_nis=' + nis + '&siswa_nama=' + nama_lengkap + '&siswa_kelas=' + kelas + '&siswa_jurusan=' + jurusan;
				$.ajax({
					type: "POST",
					url: "aksi.php?aksi=simpan",
					data: data,
					success: function(){
						$("#data-mahasiswa").load(data_mh);
					}
				});

			});

			//batal di klik
			$('#batal').click(function(){
				$(this).css('visibility', 'hidden');
				$('#update').css('visibility', 'hidden');
				$('#submit').css('visibility', 'visible');
			});
			
			//fungsi edit
			$('#update').click(function(){
				var siswa_nis= $('#nis').val();
				var nama_lengkap= $('#nama_lengkap').val();
				var kelas= $('#kelas').val();
				var jurusan= $('#jurusan').val();

				var data= 'siswa_id='+ siswa_id +'&siswa_nis=' + siswa_nis + '&siswa_nama=' + nama_lengkap + '&siswa_kelas=' + kelas + '&siswa_jurusan=' + jurusan;
				console.log(data);

				$.ajax({
					type: 'POST',
					url: 'aksi.php?aksi=update',
					data: data,
					success: function(){
						$('#data-mahasiswa').load(data_mh);
					}
				});

				$(this).css('visibility', 'hidden');
				$('#batal').css('visibility', 'hidden');
				$('#submit').css('visibility', 'visible');


			});
		});
	</script>
</body>
</html>