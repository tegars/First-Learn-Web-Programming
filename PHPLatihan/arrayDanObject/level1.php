<?php
#01 BENTUK DASAR
$data1= [
'tegar',
'swasono',
'tatag'
];
foreach($data1 as $data){
	echo $data;
}
echo '<hr/><hr/>';


#02 BENTUK FUNGSI
function dataBentukFungsi(){
	return [
		'tegar',
		'swasono',
		'tatag'
	];
}
foreach(dataBentukFungsi() as $data){
	echo $data;
}
echo '<hr/><hr/>';


#03 BENTUK OBJEK
class data2{
	function dataBentukFungsi(){
		return [
			'tegar',
			'swasono',
			'tatag'
		];
	}	
}
$data3= new data2;
$data4= $data3->dataBentukFungsi();
foreach ($data4 as $data) {
	echo $data;
}

?>
