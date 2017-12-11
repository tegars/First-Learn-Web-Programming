<?php
#01 BENTUK DASAR
$nama1= [
    'tegar',
    'swasono'
];
$nama= array(
    'tegar',
    'swasono'
);
if($nama===$nama1){
    echo 'sama';
}


#02 INDEX DIGANTI NAMA
$nama2 = array(
    'nama'=>"Andri",
    'nama'=>"Joko",
    'nama'=>"Sukma",
    'nama'=>"Rina",
    'nama'=>"Sari"
);
$nama3= [
    'nama'=>"Andri",
    'nama'=>"Joko",
    'nama'=>"Sukma",
    'nama'=>"Rina",
    'nama'=>"Sari"
];
if($nama2===$nama3){
    echo 'sama';
}



#03 INDEX DIGANTI NOMOR
$nama4 = array(
    1=>"Andri",
    6=>"Joko",
    12=>"Sukma",
    45=>"Rina",
    55=>"Sari"
);
$nama5= [
    '1'=>'Andri',
    '6'=>'Joko',
    '12'=>'Sukma',
    '45'=>'Rina',
    '55'=>'Sari'
];
if($nama4===$nama5){
    echo 'sama';
}
foreach ($nama5 as $kunci =>$isi){
    echo "Urutan ke-$kunci adalah $isi";
    echo "<br />";
}
echo '<hr/>';







?>