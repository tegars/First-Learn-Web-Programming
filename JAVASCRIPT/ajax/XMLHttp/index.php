<!DOCTYPE html>
<html>
<head>
	<title>Membuat objek XMLHTTPRequest</title>
</head>
<body>
	<h2>Tekan F12 untuk melihat</h2>
	<script type="text/javascript">
		var xhttp;
		if(window.XMLHTTPRequest){
			xhttp= new XMLHTTPRequest();
		}else{
			//ini untuk IE 5 dan 6
			xhttp= new ActiveXObject("Microsoft.XMLHTTP");
		}
	</script>
</body>
</html>