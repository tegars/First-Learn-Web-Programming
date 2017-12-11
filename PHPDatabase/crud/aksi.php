<?php
	include('koneksi.php');
	if(isset($_POST['simpan'])){
		simpan();
	}
	if(isset($_POST['update'])){
		update();
	}
	if(isset($_GET['hapus'])){
		hapus();
	}

	// else if(isset($_GET['hapus'])){
	// 	hapus();
	// }else{
	// 	echo 'tdiak cocok';
	// }
	function simpan(){
		$nama= $_POST['nama'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		$minat='';
		if(!empty($_POST['minat1'])){
			$minat= $minat.'1,';
		}
		if(!empty($_POST['minat2'])){
			$minat= $minat.'2,';
		}
		if(!empty($_POST['minat3'])){
			$minat= $minat.'3,';
		}
		$cita_cita= $_POST['cita_cita'];
		$keterangan= $_POST['keterangan'];

		$query1= "insert into `data_diri`(`nama`, `jenis_kelamin`, `minat`, `cita_cita`, `keterangan`) values('$nama', '$jenis_kelamin', '$minat', '$cita_cita', '$keterangan'); ";
		$query= mysql_query($query1) or die(mysql_error());

		if($query){
			echo "Berhasil simpan";
		}
		header("location: index.php");
	}
	function update(){
		$id= $_POST['id'];
		$nama= $_POST['nama'];
		$jenis_kelamin= $_POST['jenis_kelamin'];
		$minat='';
		if(!empty($_POST['minat1'])){
			$minat= $minat.'1,';
		}
		if(!empty($_POST['minat2'])){
			$minat= $minat.'2,';
		}
		if(!empty($_POST['minat3'])){
			$minat= $minat.'3,';
		}
		$cita_cita= $_POST['cita_cita'];
		$keterangan= $_POST['keterangan'];

		$query1= "UPDATE `data_diri` SET `nama`='$nama',`jenis_kelamin`='$jenis_kelamin',`minat`='$minat',`cita_cita`='$cita_cita',`keterangan`='$keterangan' WHERE `id`='$id'";
		//$query1= "insert into `data_diri`(`nama`, `jenis_kelamin`, `minat`, `cita_cita`, `keterangan`) values('$nama', '$jenis_kelamin', '$minat', '$cita_cita', '$keterangan'); ";
		$query= mysql_query($query1) or die(mysql_error());

		if($query){
			echo "Berhasil Update";
		}
		header("location: index.php");
	}
	function hapus(){
		$id= $_GET['hapus'];
		$query= mysql_query("delete from `data_diri` where id='$id';   ");
		if($query){
			echo 'berhasil';
		}else{
			echo 'gagal';
		}
		header("location: index.php");
	}
?>