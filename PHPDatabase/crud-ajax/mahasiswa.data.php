<?php include('koneksi.php') ?>

<table border="1" cellspacing="0">
	<thead bgcolor="#cccccc">
		<tr>	
			<th>No</th>
			<th>NIS</th>
			<th>Nama Lengkap</th>
			<th>Kelas</th>
			<th>Jurusan</th>

			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$query=mysql_query("select * from siswa order by siswa_nis desc") or die(mysql_error());
		if(mysql_num_rows($query)==0){
			echo '<tr><td colspan="6">Tidak ada data</td></tr>';
		}else{
			$no=1;
			while($data=mysql_fetch_assoc($query)){
				echo'<tr>';
					echo '<td>'.$no.'</td>';
					echo '<td>'.$data['siswa_nis'].'</td>';
					echo '<td>'.$data['siswa_nama'].'</td>';
					echo '<td>'.$data['siswa_kelas'].'</td>';
					echo '<td>'.$data['siswa_jurusan'].'</td>';
					echo '<td>';
						echo '<button class="edit" id="'.$data['siswa_id'].'">'.'Edit</button> ';
						// echo '<a href="aksi.php?hapus='.$data['siswa_id'].' " onclick="return confirm(\'Yakin?\')">Hapus</a> ';
						echo '<button class="hapus" id="'.$data['siswa_id'].'">Hapus</button>';
					echo '</td>';
				echo'</tr>';
				$no++;
			}
		}
	?>
	</tbody>
</table>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
	$(function(){
		var data_mh= 'mahasiswa.data.php';

		//fungsi hapus
		$('.hapus').click(function(){
            var id = $(this).attr('id');
            var data= 'id='+id;
        	$.ajax({
				type: "POST",
				url: "aksi.php?aksi=hapus",
				data: data,
				success: function(){
					console.log('abc');
					$("#data-mahasiswa").load(data_mh);
				}
			});
        });

		//fungsi edit
        $('.edit').click(function(){
        	window.siswa_id= $(this).attr('id');

        	var nis= $(this).parent().siblings().eq(1).html();
			var nama_lengkap= $(this).parent().siblings().eq(2).html();
			var kelas= $(this).parent().siblings().eq(3).html();
			var jurusan= $(this).parent().siblings().eq(4).html();
			
			$('#nis').val(nis);
			$('#nama_lengkap').val(nama_lengkap);
			$('#kelas').val(kelas);
			$('#jurusan').val(jurusan);

			$('#batal').css('visibility', 'visible');
			$('#update').css('visibility', 'visible');
			$('#submit').css('visibility', 'hidden');

			var data= 'siswa_id='+ siswa_id +'&siswa_nis=' + nis + '&siswa_nama=' + nama_lengkap + '&siswa_kelas=' + kelas + '&siswa_jurusan=' + jurusan;
				console.log(data);
        });


	});
</script>