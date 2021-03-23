// function faktorial(n) {
//     var faktor =1
//     for(var i=1;i<=n;i++){
//     faktor = faktor*i
// }
// return faktor
// }
// document.write("Faktorialnya " + faktorial(3) + "</br>")


// function faktorialRekursif(n){
//     if(n==0)
//     {
//     return 1
//     }
// else{
//     return n*faktorialRekursif(n-1)
// }
// }
// document.write("Faktorialnya secara rekursif " + faktorialRekursif(2) + "</br>")



// var angka

// angka =prompt("Masukkan angka yang akan di faktorialkan :")

// function faktorialRekursif(angka){
//     if(angka==0)
//     {
//     return 1
//     }
// else{
//     return angka*faktorialRekursif(angka-1)
// }
// }
// document.write("Faktorialnya secara rekursif " + faktorialRekursif(angka) + "</br>")


// function pangkat(bil,bilPangkat) {
//     var hasil = 1
//     for(var i=0;i<bilPangkat;i++){
//         hasil = hasil * bil
//     }
//     return hasil
// }
// document.write("Hasil bilangan berpangkat " + pangkat(2,2) + "</br>")


// function pangkat(bil,bilPangkat) {
//     var hasil = 1
//     for(var i=0;i<bilPangkat;i++){
//         hasil = hasil * bil
//     }
//     return hasil
// }
// document.write("Hasil bilangan berpangkat (for) " + pangkat(2,2) + "</br>")


var bill =prompt("Masukkan angka yang akan di pangkatkan :")
var billpangkat =prompt("Masukkan pangkat :")

function pangkatRekursif(bill , billpangkat){
    if(billpangkat==0)
    {
    return 1
    }
else{
    return bill*pangkatRekursif(bill,billpangkat-1)
}
}
document.write("Hasil Pangkatnya secara rekursif " + "</br>")