<?php
	//interface lebih seperti kontrak
	//kalau abstract kelas adalah kerangka untuk di ikuti oleh anak anaknya
	interface mouse{
	   public function klik_kanan();
	   public function klik_kiri();
	}
	  
	class laptop implements mouse{
	   	public function klik_kanan(){
	     	return "Klik Kanan...";
		}
	   	protected function klik_kiri(){
	    	return "Klik Kiri...";
		}
	}
	class notebook implements mouse{
	   	public function klik_kanan(){
	     	return "Klik Kanan...";
		}
	   	protected function klik_kiri(){
	    	return "Klik Kiri...";
		}
	}
?>