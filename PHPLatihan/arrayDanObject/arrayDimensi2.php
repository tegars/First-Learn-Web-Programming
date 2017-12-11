<?php

#02 DIMENSI 2
$data1= [
    ['nama'=>'tegar', 'alamat'=>'malang'],
    ['nama'=>'swasono', 'alamat'=>'kademangan'],
    ['nama'=>'tatag', 'alamat'=>'pagelaran']
];
$data2= array(
    array(
        'nama'=>'tegar',
        'alamat'=>'malang'
    ),
    array(
        'nama'=>'swasono',
        'alamat'=>'kademangan'
    ),
    array(
        'nama'=>'tatag',
        'alamat'=>'pagelaran'
    )
);
if($data1===$data2){
    echo 'sama';
}
?>