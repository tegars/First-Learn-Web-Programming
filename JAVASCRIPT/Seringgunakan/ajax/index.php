<!DOCTYPE html>
<html>
<head>
	<title>Ajax Training</title>
</head>
<body>
<h4>Tambah Data</h4>
<form>
	Nama: <input type="" name="" id="name"><br>
	Alamat: <input type="" name="" id="alamat"><br>
	<button type="reset">Reset</button> 
	<button id="simpan" type="button">Submit</button>
</form>
<hr>
<table border="1" cellspacing="0" id="tabel1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody class="tbody">
		
	</tbody>
</table>
<hr>
<ol class="inner"></ol>
<hr>
<div class="tes">
	
</div>
<script src="js/jquery-3.1.1.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		//#01 RESET
		function reset(){
			$('#name').val('');
			$('#alamat').val('');
		}

		//#02 AJAX SAVE DATA
		$('#simpan').click(function(){
			var namai= $('#name').val();
			var alamati= $('#alamat').val();

			$.ajax({
				url: 'backend/simpan.php',
				method: 'GET',
				data: {nama: namai, alamat: alamati}
			}).done(function(msg){
				alert("Data Saved");
				reset();
				tabel();
			});
			$(document).ajaxError(function(){
				alert("Failed to Save");
			});
		});

		//#03 DISPLAY DATA
		function tabel(){
			$.getJSON( "http://code.dev/JAVASCRIPT/Seringgunakan/ajax/backend/getDt.php", function( data ) {
			  	//#01 Untuk Tabel
			  	$("#tabel1 > tr").remove();
			  	var no=1;
			  	for(var a=0; a<data.length; a++){
			  		var output= 
			  		"<tr>"+
			  			"<td>"+no+"</td>"+
			  			"<td>"+data[a].alamat+"</td>"+
			  			"<td>"+data[a].id+"</td>"+
			  			"<td>"+data[a].nama+"</td>"+
			  		"</tr>";
			  		$(".tbody").append(output);
			  		no++;
			  	}


			  	//#02 Untuk List
			  	for(var a=0; a<data.length; a++){
			  		$( ".inner" ).append("<li>"+data[a].alamat+"</li>");
			  	}
			});

		}
		tabel();
		$(".tes").wrapInner('<tr>'); 
		$(".tes>tr").append('<td>saya sedang mencoba</td>'); 

	});
</script>
</body>
</html>