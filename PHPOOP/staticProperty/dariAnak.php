<?php
  class komputer {
     protected static function beli_komputer(){
       return "Beli Komputer Baru";
     }
  }
  class laptop extends komputer{
     private static function beli_laptop(){
       return "Beli Laptop Baru";
     }
    
     // public static method
     public static function beli_semua(){
       echo parent::beli_komputer();
       echo "<br />";
       echo self::beli_laptop();
     }
  }
  laptop::beli_semua();
?>