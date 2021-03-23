function jumlahab (a,b){
return a+b
}
var halo = function (x) {
for(var i=0; i<x; i++){
document.write("kucing" + "</br>")
}
}


var hasil = jumlahab(2,8)
document.write("Hasil dari function jumlahab a + b = " + hasil + "</br>") 
////atau
document.write("Hasil dari function jumlahab a + b = " + jumlahab(4,5)  + "</br>") 

function fungsiku(){
    alert("Pemanggilan dengan window nama.fungsi ()")
}