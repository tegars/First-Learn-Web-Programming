<hr/><p align="center">Array 1 Dimensi</p><hr/>
<?php
$mahasiswa= array('tegar', 'fairus', 'dani', 'ayom');
//atau
$mahasiswa= array(
	'tegar',
	'fairus',
	'dani',
	'ayom'
);

#0
print_r($mahasiswa);
echo '<hr/>';

#1
foreach($mahasiswa as $data):
	echo $data.'|';
endforeach;
echo '<hr/>';

#2
foreach($mahasiswa as $namaKolom=> $isi):
	echo 'key='.$namaKolom.'|| dan '.$isi;
endforeach;
echo '<hr/>';

#3
for($a=0; $a<count($mahasiswa); $a++){
	echo $mahasiswa[$a].'|';
}
?>




<hr/><p align="center">Masih Array 1 Dimensi - Custom Nama Kolom</p><hr/>
<?php
$mahasiswa2= array(
	'nama'=>'Tegar',
	'alamat'=>'Malang',
	'jurusan'=>'Teknik Informatika'
);
#0
print_r($mahasiswa2);
echo '<hr/>';

#1
foreach($mahasiswa2 as $data):
	echo $data;
endforeach;
echo '<hr/>';

#2
foreach($mahasiswa2 as $namaKolom=>$data):
	echo $namaKolom.'|'.$data.'<br/>';
endforeach;
echo '<hr/>';

#3
echo 'for tidak bisa berjalan di sini';
echo '<hr/>';
//for tidak bisa digunakan disini
?>

