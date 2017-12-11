<?php
	class swasono{
		private $host;
		private $user;
		private $password;
		private $database;

		//fungsi koneksi database
		public function koneksi($host, $user, $password, $database){
			$this->host= $host;
			$this->user= $user;
			$this->password= $password;
			$this->database= $database;

			mysql_connect($host, $user, $password);
			mysql_select_db($database);
		}

		// ini adalah alasan kenapa kita harus mengset parameter kepada property class
		public function coba(){
			echo $this->host;
		}

		//mendapatkan data dengan fetch_assoc 
		public function retrieve1($query){
			$eksekusi= mysql_query($query);
			if(mysql_num_rows($eksekusi)==0){
				echo 'Data Kosong';
			}
			else{
				while($data=mysql_fetch_assoc($eksekusi)){
					echo $data['id'];
					echo '<br/>';
					echo $data['nama'];
					echo '<br/>';
					echo $data['alamat'];
					echo '<br/>';
				}
			}
		}

		//mendapatkan data dengan fetch_array
		public function retrieve2($query){
			$eksekusi= mysql_query($query);
			if(mysql_num_rows($eksekusi)==0){
				echo 'Data Kosong';
			}
			else{
				while($data= mysql_fetch_array($eksekusi)){
					echo $data[0];
					echo '<br/>';
					echo $data[1];
					echo '<br/>';
					echo $data[2];
					echo '<br/>';
				}
			}
		}

		//coba memasukkan data
		public function insert($nama, $alamat){
			$cek= mysql_query("insert into latihan(nama,alamat) values($nama, $alamat);")or die(mysql_error());
			if($cek){
				echo 'Berhasil Simpan';
			}
			else{
				echo 'gagal simpan';
			}
		}
	}

	$tegar= new swasono();
	$tegar->koneksi('localhost', 'root', '','latihan');
	// $tegar->retrieve1('select * from latihan;');
	// $tegar->retrieve2('select * from latihan;');
	// $tegar->insert('"swasono"', '"gondanglegi"');
	// $tegar->coba();
	
?>
