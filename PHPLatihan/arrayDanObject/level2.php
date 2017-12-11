<?php
$data1= [
	['nama'=>'tegar', 'alamat'=>'malang'],
	['nama'=>'swasono', 'alamat'=>'kademangan'],
	['nama'=>'tatag', 'alamat'=>'pagelaran']
];
foreach($data1 as $data){
	echo $data['nama'];
	echo $data['alamat'].'<hr/>';
}



?>