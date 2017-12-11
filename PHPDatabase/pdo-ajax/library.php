<?php
class library{
	public function __construct(){
		$this->db= new PDO('mysql:host=localhost; dbname=MyPHPDatabase', 'root', '');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	public function select_dd(){
		$query= $this->db->prepare("SELECT * FROM data_diri; ");
		$query->execute();
		return $query;
	}

	public function edit_dd($id){
		$query= $this->db->prepare("SELECT * FROM data_diri where id='$id'; ");
		$query->execute();
		return $query;
	}

	public function update_dd($id, $nama, $jenisKelamin, $minat, $citaCita, $keterangan){
		$query= $this->db->prepare("UPDATE data_diri SET nama='$nama', jenis_kelamin='$jenisKelamin', minat='$minat', cita_cita='$citaCita', keterangan='$keterangan' WHERE id='$id';   ");
		$query->execute();
		if(!$query){
			return 'Gagal';
		}else{
			return 'Berhasil';
		}
	}

	public function add_dd($nama, $jenisKelamin, $minat, $citaCita, $keterangan){
		$query= $this->db->prepare("INSERT INTO data_diri(nama, jenis_kelamin, minat, cita_cita, keterangan) values ('$nama', '$jenisKelamin', '$minat', '$citaCita', '$keterangan');   ");
		$query->execute();
		if(!$query){
			return 'Gagal';
		}else{
			return 'Berhasil';
		}
	}

	public function delete_dd($id){
		$query= $this->db->prepare("DELETE FROM data_diri WHERE id='$id';  ");
		$query->execute();
		if(!$query){
			return 'Gagal';
		}else{
			return 'Berhasil';
		}
	}
}
$lib= new library();
if(isset($_GET['aksi'])){
	if($_GET['aksi']=='hapus'){
		$id= $_POST['id'];
		$lib->delete_dd($id);
	}
	if($_GET['aksi']=='simpan'){
		$nama= $_POST['nama'];
		$jenisKelamin= $_POST['jenisKelamin'];
		$citaCita= $_POST['citaCita'];
		$keterangan= $_POST['keterangan'];
		$minat= $_POST['minat'];
		$lib->add_dd($nama, $jenisKelamin, $minat, $citaCita, $keterangan);
	}
}
?>