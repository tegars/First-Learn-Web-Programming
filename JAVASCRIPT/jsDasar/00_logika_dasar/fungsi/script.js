//prosedur tidak memiliki return
//fungsi memiliki return

//javascript tidak kenal void

//01 prosedur tanpa parameter
function prosedur(){
	var cetak='ini adalah prosedur';
	document.write(cetak);
}
prosedur();
document.write('<hr/>');


//02 fungsi tanpa parameter
function fungsi(){
	var cetak='ini adalah fungsi';
	return cetak;
}
document.write(fungsi());
document.write('<hr/>');



//03 Prosedur dengan parameter
var angka1=5;
var angka2=7;
var hasil;

function hitung(angka1, angka2){
	this.angka1= angka1;
	this.angka2= angka2;
	this.hasil= this.angka1+this.angka2;
	return this.hasil;
}
document.write(hitung(5,3));
document.write('<hr/>');
document.write(hasil+' nilai akan tetap');
document.write('<hr/>');
