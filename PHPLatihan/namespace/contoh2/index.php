<?php 
namespace fub;
include 'file1.php';
include 'file2.php';
include 'file3.php';

use satu as satu1;
use dua as dua2;
use tiga;
echo satu1\Cat::says(), "<br />\n";
echo dua2\Dog::says(), "<br />\n";
echo tiga\Animal::breathes(), "<br />\n";  

?>