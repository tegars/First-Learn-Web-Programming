<!DOCTYPE html>
<html>
<head>
	<title>XHMHttp</title>
	<script>
		function loadDoc(){
			var xhttp;
			if(window.XMLHttpRequest){
				//code for modern browsers
				xhttp= new XMLHttpRequest();
			}
			xhttp.onreadystatechange= function(){
				if(xhttp.readyState==4 && xhttp.status==200){
					document.getElementById("demo").innerHTML=xhttp.responseText;
				}
			};
			xhttp.open("GET", "ajax_info.txt", true);
			xhttp.send();
		}
	</script>
</head>
<body>
	<p id="demo">Let AJAX change this text.</p>
	<button style="button" onclick="loadDoc()">Change Content</button>
</body>
</html>