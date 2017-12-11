<?php
class library{
	public function __construct(){
		$this->db= mysqli_connect('localhost', 'root', '', 'MyPHPDatabase');
	}
	public function select_dd(){
		$sql= "SELECT * FROM data_diri; ";
		$query= mysqli_query($this->db, $sql);
		return $query;
	}

	public function edit_dd($id){
		$sql= "SELECT * FROM data_diri where id='$id'; ";
		$query= mysqli_query($this->db, $sql);
		return $query;
	}

	public function update_dd($id, $nama, $jenisKelamin, $minat, $citaCita, $keterangan){
		$sql= "UPDATE data_diri SET nama='$nama', jenis_kelamin='$jenisKelamin', minat='$minat', cita_cita='$citaCita', keterangan='$keterangan' WHERE id='$id';   ";
		$query= mysqli_query($this->db, $sql);
		if(!$query){
			return 'Gagal';
		}else{
			return 'Berhasil';
		}
	}

	public function add_dd($nama, $jenisKelamin, $minat, $citaCita, $keterangan){
		$sql= "INSERT INTO data_diri(nama, jenis_kelamin, minat, cita_cita, keterangan) values ('$nama', '$jenisKelamin', '$minat', '$citaCita', '$keterangan');   ";
		$query= mysqli_query($this->db, $sql);
		if(!$query){
			return 'Gagal';
		}else{
			return 'Berhasil';
		}
	}

	public function delete_dd($id){
		$sql="DELETE FROM data_diri WHERE id='$id';  ";
		$query= mysqli_query($this->db, $sql);
		if(!$query){
			return 'Gagal';
		}else{
			return 'Berhasil';
		}
	}
}
#Dari w3school
/*
$this->db= mysqli_connect('localhost', 'root', '', 'MyPHPDatabase');
if(!$this->db){
	die('gagal koneksi'.mysqli_connect_error());
}else{
	echo 'berhasil koneksi';
}
*/
?>