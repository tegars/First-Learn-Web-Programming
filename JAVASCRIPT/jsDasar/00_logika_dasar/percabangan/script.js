//ini menggunakan if-else
var angka=5;
if(angka<5){
	document.write('angka lebih kecil dari lima');
}
else if(angka==5){
	document.write('angka ini adalah lima');
}
else{
	document.write('angka ini lebih dari lima');
}
document.write('<hr/>');


//menggunakan switch case
switch(angka){
	case 0: document.write('enol'); break;
	case 3: document.write('tiga'); break;
	case 5: document.write('lima'); break;
	default: document.write('angka salah'); break;
}
