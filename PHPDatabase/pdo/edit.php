<?php
include('library.php');
$lib= new library();

if(isset($_POST['update'])){
	$id= $_POST['id'];

	$nama=$_POST['nama'];
	$jenisKelamin= $_POST['jenisKelamin'];

	$minat;
	if(!empty($_POST['minat1'])){
		$minat= $minat.'1,';
	}
	if(!empty($_POST['minat2'])){
		$minat= $minat.'2,';
	}
	if(!empty($_POST['minat3'])){
		$minat= $minat.'3,';
	}

	$citaCita= $_POST['citaCita'];
	$keterangan= $_POST['keterangan'];

	$add= $lib->update_dd($id, $nama, $jenisKelamin, $minat, $citaCita, $keterangan);
	if($add=='Berhasil'){
		header('Location:index.php');
	}
}

$data= $lib->edit_dd($_GET['edit'])->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Edit Data Diri Siswa</h2>
	<a href="index.php">Beranda</a>
	<hr/>
	<form method="POST" action="edit.php">
		<input type="hidden" name="id" value="<?php echo $data->id ?>" >
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $data->nama ?>">
		</div>
		<div class="form-group">
			<label>Jenis Kelamin</label><br/>
			<label class="radio-inline"><input type="radio" name="jenisKelamin" value="L" 
				<?php if($data->jenis_kelamin=='L') echo 'checked' ?> 
			>Laki Laki</label>
			<label class="radio-inline"><input type="radio" name="jenisKelamin" value="P" 
				<?php if($data->jenis_kelamin=='P') echo 'checked' ?> 
			>Perempuan</label>
		</div>
		<div class="form-group">
			<label>Minat</label><br/>
			<label class="checkbox-inline"><input type="checkbox" value="Pemrograman" name="minat1" id="pemrograman">Pemrograman</label>
			<label class="checkbox-inline"><input type="checkbox" value="Desain" name="minat2" id="desain">Desain</label>
			<label class="checkbox-inline"><input type="checkbox" value="Jaringan" name="minat3" id="jaringan">Jaringan</label>
		</div>
		<div class="form-group">
			<label>Cita Cita</label><br/>
			<select class="form-control" name="citaCita">
				<option>-- Pilih --</option>
				<option <?php if($data->cita_cita=='Guru') echo 'selected' ?> >Guru</option>
				<option <?php if($data->cita_cita=='Dosen') echo 'selected' ?> >Dosen</option>
				<option <?php if($data->cita_cita=='Programmer') echo 'selected' ?> >Programmer</option>
				<option <?php if($data->cita_cita=='Desainer') echo 'selected' ?> >Desainer</option>
			</select>
		</div>
		<div class="form-group">
			<label>Keterangan</label><br/>
			<textarea name="keterangan" class="form-control" style="resize: none; height:150px;"><?php echo $data->keterangan ?></textarea>
		</div>
		<input type="submit" value="Update" class="btn btn-warning" name="update">
		<input type="reset" value="Reset" class="btn btn-info"> 
		<a href="index.php" class="btn btn-success">Batal Edit Data</a>
	</form>
</div>
<hr/><hr/><hr/><hr/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var minat= '<?php echo $data->minat ?>';
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
</body>
</html>
<?php


?>