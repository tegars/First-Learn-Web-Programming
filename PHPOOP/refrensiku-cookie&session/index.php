<?php
	
	//membuat cookie dan menerapkan nya
	class cookie{
		public function cookie1(){
			$cookie_name='nama';
			$cookie_value='tegar';
			setcookie($cookie_name, $cookie_value);

			if(empty(isset($_COOKIE[$cookie_name]))){
				echo "Cookie named '".$cookie_name."'is not set!";
			}
			else{
				echo "Cookie'".$cookie_name."'is set!<br/>";
				echo "Value is: ".$_COOKIE[$cookie_name];
			}
		}
	}
	$tegar=  new cookie();
	$tegar->cookie1();
?>