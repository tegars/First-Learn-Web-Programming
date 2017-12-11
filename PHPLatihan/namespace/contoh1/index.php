<?php 
//namespace mulai ada di PHP v5
include_once 'Bmw/Car.php';
include_once 'Lamborghini/Car.php';
include_once 'Toyota/Car.php';
 
$bmw = new \Bmw\Car;
$bmw->drive();
echo '<br/>';

$lamborghini = new \Lamborghini\Car;
$lamborghini->drive();
echo '<br/>';
 
$toyota = new \Toyota\Car;
$toyota->drive();
echo '<br/>';

 ?>