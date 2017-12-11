<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi CRUD FULL</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php include('koneksi.php') ?>
	<hr/>
	<hr/>
	<hr/>
	<div class="container">
		<a href="tambah.php">Tambah</a>
		<hr/>
		<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Minat</th>
			<th>Cita cita</th>

			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
		<?php
			$query= mysql_query('select * from data_diri') or die(mysql_error());
			if(mysql_num_rows($query)==0){
				echo "data kosong";
			}
			else{
				while($data= mysql_fetch_assoc($query)){
					echo '<tr>';
						echo '<td>'.$data['id'].'</td>';
						echo '<td>'.$data['nama'].'</td>';
						echo '<td>'.$data['jenis_kelamin'].'</td>';
						echo '<td>';
							//echo $data['minat'];
							$minat= explode(',',$data['minat']);
							// echo count($minat);
							// echo $minat[0];
							for($a=0; $a<count($minat)-1; $a++){
								if($minat[$a]==1){
									echo 'Pemrograman, ';
								}
								else if($minat[$a]==2){
									echo 'Desain, ';
								}
								else if($minat[$a]==3){
									echo 'Jaringan';
								}
							}
							

						echo '</td>';
						echo '<td>'.$data['cita_cita'].'</td>';

						echo '<td>'.$data['keterangan'].'</td>';
						echo '<td>';
							echo '<a href="edit.php?id='.$data['id'].'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> ';
							echo '<a href="aksi.php?hapus='.$data['id'].'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a> ';
						echo '</td>';
					echo '</tr>';
				}
			}


		?>
		</table>
		<script type="text/javascript">
			$(document).ready(function(){



			});
		</script>
	</div>
</body>
</html>