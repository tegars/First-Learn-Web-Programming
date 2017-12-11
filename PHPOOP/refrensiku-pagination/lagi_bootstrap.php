<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
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
				echo '<br/><center>';
				echo '<div style="font-size:10pt;">';

				$a= explode('.', $jumlahData/$batasAwal);
				$b= $a[0];
				if(empty($a[1])){
					$c=$b;
				}else{
					$c = $b + 1;
				}
				echo '<ul class="pagination">';
				for($i=1; $i<=$c; $i++){
					if(!empty($_GET['page'])){
						if($_GET['page']==$i){
							echo '<li class="active">';
						}else{
							echo '<li>';	
						}
					}
					else{
						echo '<li>';
					}
					echo '<a href="?page='.$i.'">' .$i.'</a></li>';
				}
				echo '<ul>';
				echo '</div></center>';
			}
		}
	}
	$swasono= new pagination;
	$swasono->paggi();
?>