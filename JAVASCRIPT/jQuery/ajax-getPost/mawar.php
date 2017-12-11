<html>
	<head>
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				//Menggunakan method get
				$.get('tes.php',function(data){
					$("#div1").html(data);
				});

				//menggunakan method post
				$("#tombol").click(function(){
					var nama = $("#nama").val();
					$.post('terserah.php',{nama:nama},function(data){
						$("#tampil").html(data);
					});
				});
				
			});
		</script>
 
	</head>
	<body>
		<h2 align="center">GET</h2>
		<div id="div1"></div>

		<hr/>
		<h2 align="center">POST</h2>

		<input type="text" id="nama">
		<button id="tombol">tombol</button>
		<div id="tampil"></div>

	</body>
</html>