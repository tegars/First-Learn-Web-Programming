<!DOCTYPE html>
<html>
<head>
	<title>advanced-cookies</title>
</head>
<body>
<?php
/*
01.	Syntax Cookies
	ada 7 parameter
	setcookie(name, value, expire, path, domain, secure, httponly);
*/

#01 create cookie
$cookie_name='username';
$cookie_value='tegar';
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
setcookie($cookie_name, $cookie_value);

# check cookie is exist
if(!isset($_COOKIE['cookie_name'])){
	echo 'cookie exist';
}else{
	echo 'cookie doesnt exist';
}

#02 Delete Cookie
/*
	#cara 1
	setcookie('login_username', '', 1);

	#cara 2
	setcookie('nama','tegar',time()-1);
*/
function delete(){
	$cookie_name= $GLOBALS['cookie_name'];
	setcookie($cookie_name, '');

}
delete();

#03 check if cookie is exist
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}



?>


</body>
</html>