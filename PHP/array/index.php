<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>
<?php
	//PHP tidak bisa deklarasi length array di awal

	#00 Array PHP tidak tergantung tipe data
	$array_php_bebas= array('tegar', 43, true);


	#01 Deklarasi array
	$nama= array('tegar', 'swasono', 'tatag');


	#02 Call value of array
	$nama[0]='tegar1';
	echo $nama[0];


	#03 Get length of an array
	echo count($nama);


	#04 fetch data array with loop
	$total_data= count($nama);
	for($a=0; $a<$total_data; $a++){
		echo $nama[$a];
	}


	#05 Fetch data array with foreach
	foreach($nama as $data){
		echo $data;
	}

	echo '<hr/>';


	#06 PHP Asosiasi / mengganti index array PHP
	$saya= array('awal'=>'tegar', 'akhir'=>'swasono', 'panggilan'=>'tatag');
	echo $saya['awal'];
	echo $saya['akhir'];
	echo $saya['panggilan'];

	echo '<hr/>';


	#07 PUSH data to array
	$data= array();
	$data[2]= 'tegar';
	$data[1]= 'tatag';
	array_push($data, 'swasono');

	echo $data[2].'<br/>';
	echo $data[3];

	echo count($data);
	echo '<hr/>';

	$dataExcel= array(
        array('1', '1', 'Mengajar Etika Profesi Kelas A', '2'),
        array('1', '1', 'Mengajar Etika Profesi Kelas B', '2'),
        array('1', '1', 'Mengajar Etika Profesi Kelas C', '2'),
        array('1', '1', 'Mengajar Etika Profesi Kelas D', '2'),

        array('1', '4', 'Matematika Lanjut B', '3'),
        array('1', '4', 'Matematika Lanjut C', '3'),
        array('1', '4', 'Matematika Lanjut D', '3'),
    );

    $no1=0;
    foreach ($dataExcel as $data):
    	echo $no1.'| ';
        foreach($data as $dt):
            echo $dt.' ';
        endforeach;
        echo '<hr/>';
        $no1++;
    endforeach;

?>
</body>
</html>