<?php
class library{
	public function __construct(){
		$this->db= new mysqli('localhost', 'root', '', 'MyPHPDatabase');
	}
	public function select_dd(){
		$query= $this->db->query("SELECT * FROM data_diri; ");
		return $query;
	}

	public function edit_dd($id){
		$query= $this->db->query("SELECT * FROM data_diri where id='$id'; ");
		return $query;
	}

	public function update_dd($id, $nama, $jenisKelamin, $minat, $citaCita, $keterangan){
		$query= $this->db->query("UPDATE data_diri SET nama='$nama', jenis_kelamin='$jenisKelamin', minat='$minat', cita_cita='$citaCita', keterangan='$keterangan' WHERE id='$id';   ");
		if(!$query){
			return 'Gagal';
		}else{
			return 'Berhasil';
		}
	}

	public function add_dd($nama, $jenisKelamin, $minat, $citaCita, $keterangan){
		$query= $this->db->query("INSERT INTO data_diri(nama, jenis_kelamin, minat, cita_cita, keterangan) values ('$nama', '$jenisKelamin', '$minat', '$citaCita', '$keterangan');   ");
		if(!$query){
			return 'Gagal';
		}else{
			return 'Berhasil';
		}
	}

	public function delete_dd($id){
		$query= $this->db->query("DELETE FROM data_diri WHERE id='$id';  ");
		if(!$query){
			return 'Gagal';
		}else{
			return 'Berhasil';
		}
	}
}
#CONTOH DARI W3SCHOOL
/*
$conn= new mysqli('localhost', 'root', '', 'MyPHPDatabase');
if($conn->connect_error){
	die('gagal koneksi'.$connect_error);
}else{
	echo 'berhasil koneksi';
}
$conn->close();
*/
?>