<?php 
require('library.php');
$lib= new library();
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PDO</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-sm-6">
	<h3><b>Tambah Data Siswa</b></h3>
	<hr/>
	<form>
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label><br/>
			<label class="radio-inline"><input type="radio" name="jenisKelamin" value="L" id="l">Laki Laki</label>
			<label class="radio-inline"><input type="radio" name="jenisKelamin" value="P" id="p">Perempuan</label>
		</div>
		<div class="form-group">
			<label>Minat</label><br/>
			<label class="checkbox-inline"><input type="checkbox" value="Pemrograman" name="minat1">Pemrograman</label>
			<label class="checkbox-inline"><input type="checkbox" value="Desain" name="minat2">Desain</label>
			<label class="checkbox-inline"><input type="checkbox" value="Jaringan" name="minat3">Jaringan</label>
		</div>
		<div class="form-group">
			<label>Cita Cita</label><br/>
			<select class="form-control" name="citaCita">
				<option>-- Pilih --</option>
				<option>Guru</option>
				<option>Dosen</option>
				<option>Programmer</option>
				<option>Desainer</option>
			</select>
		</div>
		<div class="form-group">
			<label>Keterangan</label><br/>
			<textarea name="keterangan" class="form-control" style="resize: none; height:150px;"></textarea>
		</div>
		<input type="button" class="btn btn-warning" name="simpan" value="Simpan" id="simpan">
		<input type="reset" value="Reset" class="btn btn-info" id="reset">
		<input type="button" class="btn btn-success" value="Update" style="visibility:hidden;" id="update">
		<input type="button" class="btn btn-primary" value="Batal" style="visibility:hidden;" id="batal">
	</form>

</div>
<div class="col-sm-6" style="border-left: 1px solid darkgrey;">
	<h3><b>Data Diri Siswa</b></h3>
	<hr/>
	<div id="data-mahasiswa"></div>
</div>

<div style="clear:both;"></div>
<hr/><hr/><hr/><hr/>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	var data_mh= 'mahasiswa.data.php';
	$("#data-mahasiswa").load(data_mh);

	$("[name='simpan']").click(function(){
		var nama= $("[name='nama']").val();
		var jenisKelamin= $('input[name=jenisKelamin]:checked').val();
		var citaCita= $('[name="citaCita"]').val();
		var keterangan= $('[name="keterangan"]').val();
		var minat='';
		if($('input[name=minat1]').prop('checked')){
			minat= minat+'1,';
		}
		if($('input[name=minat2]').prop('checked')){
			minat= minat+'2,';
		}
		if($('input[name=minat3]').prop('checked')){
			minat= minat+'3,';
		}
		
		var data= 'nama='+nama+'&jenisKelamin='+jenisKelamin+'&citaCita='+citaCita+'&keterangan='+keterangan+'&minat='+minat;
    	$.ajax({
			type: "POST",
			url: "library.php?aksi=simpan",
			data: data,
			success: function(){
				console.log('berhasil simpan');
				$("#data-mahasiswa").load(data_mh);
			}
		});
	});



});
</script>