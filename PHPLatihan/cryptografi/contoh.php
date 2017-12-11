<title>Cryptografi</title>
<?php
	#01 Crack - Cracklib
	




	#02 CSPRNG

	#03 Hash - HASH Message Digest Framework
	/*
	hash_algos — Return a list of registered hashing algorithms
	hash_copy — Copy hashing context
	hash_equals — Timing attack safe string comparison
	hash_file — Generate a hash value using the contents of a given file
	hash_final — Finalize an incremental hash and return resulting digest

	hash_hmac_file — Generate a keyed hash value using the HMAC method and the contents of a given file
	hash_hmac — Generate a keyed hash value using the HMAC method
	hash_init — Initialize an incremental hashing context
	hash_pbkdf2 — Generate a PBKDF2 key derivation of a supplied password
	hash_update_file — Pump data into an active hashing context from a file

	hash_update_stream — Pump data into an active hashing context from an open stream
	hash_update — Pump data into an active hashing context
	hash — Generate a hash value (message digest)
	*/
	function LMhash_DESencrypt($string)
	{
	    $key = array();
	    $tmp = array();
	    $len = strlen($string);

	    for ($i=0; $i<7; ++$i)
	        $tmp[] = $i < $len ? ord($string[$i]) : 0;

	    $key[] = $tmp[0] & 254;
	    $key[] = ($tmp[0] << 7) | ($tmp[1] >> 1);
	    $key[] = ($tmp[1] << 6) | ($tmp[2] >> 2);
	    $key[] = ($tmp[2] << 5) | ($tmp[3] >> 3);
	    $key[] = ($tmp[3] << 4) | ($tmp[4] >> 4);
	    $key[] = ($tmp[4] << 3) | ($tmp[5] >> 5);
	    $key[] = ($tmp[5] << 2) | ($tmp[6] >> 6);
	    $key[] = $tmp[6] << 1;
	   
	    $is = mcrypt_get_iv_size(MCRYPT_DES, MCRYPT_MODE_ECB);
	    $iv = mcrypt_create_iv($is, MCRYPT_RAND);
	    $key0 = "";
	   
	    foreach ($key as $k)
	        $key0 .= chr($k);
	    $crypt = mcrypt_encrypt(MCRYPT_DES, $key0, "KGS!@#$%", MCRYPT_MODE_ECB, $iv);

	    return bin2hex($crypt);
	}
	echo 'tegar: ';
	echo LMhash_DESencrypt('tegar');
	echo '<hr/>';

	function NTLMHash($Input) {
	  // Convert the password from UTF8 to UTF16 (little endian)
	  $Input=iconv('UTF-8','UTF-16LE',$Input);

	  // Encrypt it with the MD4 hash
	  $MD4Hash=bin2hex(mhash(MHASH_MD4,$Input));

	  // You could use this instead, but mhash works on PHP 4 and 5 or above
	  // The hash function only works on 5 or above
	  //$MD4Hash=hash('md4',$Input);

	  // Make it uppercase, not necessary, but it's common to do so with NTLM hashes
	  $NTLMHash=strtoupper($MD4Hash);

	  // Return the result
	  return($NTLMHash);
	}
	echo 'tegar: ';
	echo NTLMHash('tegar');
	echo '<hr/>';
	#04 Mcrypt

	#05 Mhash

	#06 OpenSSL

	#07 Password Hashing

?>