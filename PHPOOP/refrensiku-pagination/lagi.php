<?php
	class pagination{
		public function __construct(){
			mysql_connect('localhost','root','');
			mysql_select_db('latihan');
		}
		public function paggi(){

			//set mulai data
			$batasAwal=3;
			if(empty($_GET['page'])){
				$mulaiAwal=0;	
			}else if(!empty($_GET['page'])){
				$hal= $_GET['page']-1;
				$mulaiAwal= $batasAwal*$hal;
			}

			//tampil data
			$query= mysql_query("select * from teman limit $mulaiAwal, $batasAwal");
			while($data= mysql_fetch_assoc($query)){
				echo $data['id'].'<br/>';
				echo $data['nama'].'<hr/>';
			}

			//navigasi
			$cekQuery= mysql_query('select * from teman');
			$jumlahData= mysql_num_rows($cekQuery);
			if($jumlahData>$batasAwal){
				echo 'Page: ';
				//fungsi explode memisah string menjadi array
				//explode bertujuan untuk membuang angka di belakang koma
				$a= explode('.', $jumlahData/$batasAwal);
				$b= $a[0];
				if(empty($a[1])){
					$c=$b;
				}else{
					$c = $b + 1;
				}
				for($i=1; $i<=$c; $i++){
					echo '<a style="text-decoration:none;';
					if($_GET['page']==$i){
						echo 'color: red';
					}
					echo '" href="?page='.$i.'">'.$i.'</a>,';
				}
			}
		}
	}
	$swasono= new pagination;
	$swasono->paggi();
?>