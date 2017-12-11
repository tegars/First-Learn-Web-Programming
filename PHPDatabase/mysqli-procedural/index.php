<!DOCTYPE html>
<html>
<head>
	<title>MySQLi - Procedural</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Data Diri Siswa</h2>
	<hr/>
	<table class="table">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Minat</th>
				<th>Cita cita</th>
				<th>Keterangan</th>

				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
			require('library.php');
			$lib= new library();
			$select_data= $lib->select_dd();
			if (mysqli_num_rows($select_data) > 0) {
				while($data= mysqli_fetch_assoc($select_data)){
					echo '<tr>';
						echo '<td>'.$data['nama'].'</td>';
						echo '<td>'.$data['jenis_kelamin'].'</td>';
						echo '<td>'.$data['minat'].'</td>';
						echo '<td>'.$data['cita_cita'].'</td>';
						echo '<td>'.$data['keterangan'].'</td>';
						echo '<td>'.'<a class="btn btn-info" href="edit.php?edit='.$data['id'].'">Edit</a>'.'</td>';
						echo '<td>'.'<a class="btn btn-warning" href="index.php?delete='.$data['id'].'">Hapus</a>'.'</td>';
					echo '</tr>';
				}
			}else{
				echo 'data kosong';
			}
			?>
		</tbody>
	</table>
	<a class="btn btn-success" href="tambah.php">Tambah Data Diri</a>
</div>
</body>
</html>
<?php
if(isset($_GET['delete'])){
	$del= $lib->delete_dd($_GET['delete']);
	if($del=='Berhasil'){
		header('Location:index.php');
	}
}

?>
<hr/><hr/><hr/><hr/>