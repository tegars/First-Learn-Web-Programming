<?php
$a= array('a','b','c');
$b= array('a');
foreach($a as $kolom=>$value){
	if(in_array($value, $b)){
		echo 'Dt sama: , kolom ke: '.$kolom.', isi: '.$value.'<hr/>';
	}
}
echo '<hr/>';

$a array(
		array('nama'=>'tegar', 'alamat'=>'malang', 'hobi'=>'futsal'),
		array('nama'=>'ayom', 'alamat'=>'sidoarjo', 'hobi'=>'bola'),
		array('nama'=>'ari', 'alamat'=>'blitar', 'hobi'=>'basket')
	);

$a array(
		array('nama'=>'ari', 'alamat'=>'blitar', 'hobi'=>'basket')
	);

foreach($a ):

endforeach;

?>