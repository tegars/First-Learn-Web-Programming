<hr><p align="center">Array 2 Dimensi</p>
<?php
$mahasiswa= array(
    array('nama'=>'tegar', 'alamat'=>'malang', 'hobi'=>'bersepeda'),
    array('nama'=>'fairus', 'alamat'=>'lamongan', 'hobi'=>'coding'),
    array('nama'=>'ayom', 'alamat'=>'sidoarjo', 'hobi'=>'futsal')
);

#0
print_r($mahasiswa);
echo '<hr/>';

#1
foreach($mahasiswa as $data):
    echo $data['nama'].'|';
    echo $data['alamat'].'|';
    echo $data['hobi'].'<br/>';
endforeach;
echo '<hr/>';

#2
foreach($mahasiswa as $namaKolom=>$data):
    echo $namaKolom.'|';
    echo $data['nama'].'|';
    echo $data['alamat'].'|';
    echo $data['hobi'].'<br/>';
endforeach;
echo '<hr/>';

#3
for($a=0; $a<count($mahasiswa); $a++){
    echo $mahasiswa[$a]['nama'].'|';
    echo $mahasiswa[$a]['alamat'].'|';
    echo $mahasiswa[$a]['hobi'].'<br/>';
}