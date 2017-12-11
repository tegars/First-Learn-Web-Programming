<?php
require('library.php');
$lib= new library();
?>
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
		
		$select_data= $lib->select_dd();
		foreach($select_data->fetchAll(PDO::FETCH_OBJ) as $data){
			echo '<tr>';
				echo '<td>'.$data->nama.'</td>';
				echo '<td>'.$data->jenis_kelamin.'</td>';
				echo '<td>'.$data->minat.'</td>';
				echo '<td>'.$data->cita_cita.'</td>';
				echo '<td>'.$data->keterangan.'</td>';
				echo '<td>'.'<button class="btn btn-info edit" id="'.$data->id.'">Edit</button>'.'</td>';
				echo '<td>'.'<button class="btn btn-warning hapus" id="'.$data->id.'">Hapus</button>'.'</td>';
			echo '</tr>';
		}
		?>
	</tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
	var data_mh= 'mahasiswa.data.php';
	$(".hapus").click(function(){
		var id= $(this).attr('id');
		var data= 'id='+id;
    	$.ajax({
			type: "POST",
			url: "library.php?aksi=hapus",
			data: data,
			success: function(){
				console.log('berhasil menghapus');
				$("#data-mahasiswa").load(data_mh);
			}
		});
	});
	$('.edit').click(function(){
		//mendapatkan nilai
		var minat='';
		var nama= $(this).parent().siblings().eq(0).html();
		var jenisKelamin= $(this).parent().siblings().eq(1).html();
		var minat= $(this).parent().siblings().eq(2).html();
		var citaCita= $(this).parent().siblings().eq(3).html();
		var keterangan= $(this).parent().siblings().eq(4).html();
		
		//set nilai
		$('[name="nama"]').val(nama);
		$('[name="citaCita"]').val(citaCita);
		$('[name="keterangan"]').val(keterangan);
		if(jenisKelamin=='L'){
			$('#l').prop("checked", true);
		}else if(jenisKelamin=='P'){
			$('#p').prop("checked", true);
		}
		//proses set minat
		$('[name="minat1"]').prop('checked', false);
		$('[name="minat2"]').prop('checked', false);
		$('[name="minat3"]').prop('checked', false);
		var minat= minat.split(',');
		for(var a=0; a<minat.length; a++){
			//console.log(minat[a]);
			if(minat[a]==1){
				$('[name="minat1"]').prop('checked', true);
			}
			if(minat[a]==2){
				$('[name="minat2"]').prop('checked', true);
			}
			if(minat[a]==3){
				$('[name="minat3"]').prop('checked', true);
			}
		}

		//set tombol
		$('#simpan').css('visibility', 'hidden');
		$('#batal').css('visibility', 'visible');
		$('#update').css('visibility', 'visible');
	});
	//aksi batal
	$('#batal').click(function(){
		$('#simpan').css('visibility', 'visible');
		$('#batal').css('visibility', 'hidden');
		$('#update').css('visibility', 'hidden');
	});

	//aksi update
	$('#update').click(function(){
		var id;
		var nama= $("[name='nama']").val();
		var jenisKelamin= $('input[name=jenisKelamin]:checked').val();
		var citaCita= $('[name="citaCita"]').val();
		var keterangan= $('[name="keterangan"]').val();
		var minat='';
		if($('input[name=minat1]').prop('checked')){
			minat= minat+'1,';
		}
		if($('input[name=minat2]').prop('checked')){
			minat= minat+'2,';
		}
		if($('input[name=minat3]').prop('checked')){
			minat= minat+'3,';
		}
		
		var data= 'nama='+nama+'&jenisKelamin='+jenisKelamin+'&citaCita='+citaCita+'&keterangan='+keterangan+'&minat='+minat;
    	$.ajax({
			type: "POST",
			url: "library.php?aksi=update",
			data: data,
			success: function(){
				console.log('berhasil simpan');
				$("#data-mahasiswa").load(data_mh);
			}
		});

	});
});
</script>