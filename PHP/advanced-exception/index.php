<!DOCTYPE html>
<html>
<head>
	<title>advanced-exception</title>
</head>
<body>
<?php
	#00 PERBANDINGAN try-catch milik java dan PHP
	/*
	INI MILIK JAVA
	try{
		echo 5/0;
	}catch(Exception $e){
		echo 'tidak bisa';
	}	
	*/


	#01 Standart Exception
	function checkNum($number){
		if($number>1){
			throw new Exception('error sam');
		}
		return true;
	}
	try{
		checkNum(2);
		 echo 'If you see this, the number is 1 or below';
	}catch(Exception $e){
		echo 'Message: '. $e->getMessage();
	}


	#02 Create a custom Exception Class
	class customException extends Exception {
  		public function errorMessage() {
	    	//error message
	    	$errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
	    	return $errorMsg;
  		}
	}
	$email = "someone@example...com";

	try {
  		//check if
  		if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
	    	//throw exception if email is not valid
	    	throw new customException($email);
  		}
	}catch (customException $e) {
		  //display custom message
		  echo $e->errorMessage();
	}
?>
<hr/>
<?php
	class customException2 extends Exception {
		public function errorMessage() {
	    	//error message
	    	$errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
	    	return $errorMsg;
	  	}
	}

	$email2= "someone@example.com";

	try{
  		//check if
  		if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    	//throw exception if email is not valid
    	throw new customException($email);
  	}
  		//check for "example" in mail address
  		if(strpos($email, "example") !== FALSE) {
    		throw new Exception("$email is an example e-mail");
  		}
	}catch (customException2 $e) {
  		echo $e->errorMessage();
	}
	catch(Exception $e) {
  		echo $e->getMessage();
	}
?>
</body>
</html>