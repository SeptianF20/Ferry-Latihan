//var kota = new Array()
// kota[0]="solo"
// kota[1]="semarang"
// kota[2]="jember"
// kota[3]="probolinggo"
// kota[4]="padang"
// kota[5]="pekanbaru"

// document.write(kota[0] + "</br>)


// var kota = new Array()

// kota[0]="solo"
// kota[1]="semarang"
// kota[2]="jember"
// kota[3]="probolinggo"
// kota[4]="padang"
// kota[5]="pekanbaru"

// document.write(kota + "</br>")
// document.write(kota[5] + "</br>")

// var bulan = new Array("Januari", "Ferbruari" ,"Maret" , "April")
// document.write("Bulan: " + bulan[2] + "</br>")

// var umur = new Array()

// umur["budi"] = 27
// umur["adi"] = 28
// umur["ferry"] = 19

// for(key in umur){
// document.write(key + " Umurnya adalah: " + umur[key] + "</br>")
// }

// var umur = new Array()

// umur["budi"] = 27
// umur["adi"] = 28
// umur["ferry"] = 19
// umur[3] = "dono"

// for(key in umur){
// document.write(key + " umurnya : " + umur[key] + "</br>")
// }

// document.write("<center><h2>Array</h2> </center>" + "</br>")
// var nama ,jumlah
// var nama = new Array()
// n= 1
// jumlah= prompt("Masukkan jumlah provinsi: ")

// while(n<=jumlah){
    
// nama= prompt("Masukkan nama Provinsi: ")
// {        
//     {document.write("Provinsi yang dimasukkan " + nama + "</br>")

// }
//       } n++

// }

//concat

// var ortu = ["Yoga","Ningsih"]
// var anak = ["toto","cemol","boni"]
// var family = ortu.concat(anak)

// document.write("Orang tua: " + ortu + "</br>")
// document.write("Anak: " + anak + "</br>")
// document.write("Famili pakai concat: " + family + "</br>")

//join()

// var ortu = ["Yoga","Ningsih"]
// var anak = ["toto","cemol","boni"]

// var stri_ortu = ortu.join("+")
// var stri_anak = anak.join("+")

// document.write("orangtua: " +stri_ortu + "</br>")
// document.write("anak: " +stri_anak + "</br>")

//mSTRING()

// var ortu = ["Yoga","Ningsih"]
// var anak = ["toto","cemol","boni"]

// var stri_ortu = ortu.join()
// var stri_anak = anak.join()

// document.write("orangtua: " +stri_ortu + "</br>")
// document.write("anak: " +stri_anak + "</br>")

//pop

// var buah = ["Jeruk","Mangga","Jambu","Apel","Nangka"]
// document.write("buah-buahan : " + "</br>")
// document.write("buah-buahan : " + buah + "</br>")

// document.write("pop pertama : " + buah.pop() +"</br>")
// document.write("sisa buah : " + buah+"</br>")

// document.write("pop kedua : " + buah.pop() +"</br>")
// document.write("sisa buah : " + buah +"</br>")
// document.write("=======================================================")

//push

// var buah2 = ["Jeruk","Mangga","Jambu","Apel","Nangka"]
// document.write("buah-buahan : " + "</br>")
// document.write("data buah-buahan : " + buah2 + "</br>")
// buah2.push("melon")
// document.write("data buah setelah push 1 : " + buah2 +"</br>")
// buah2.push("nanas")
// document.write("data buah setelah push 2 : " + buah2 +"</br>")
// document.write("=======================================================")

//shift
// var buah2 = ["Jeruk","Mangga","Jambu","Apel","Nangka"]
// document.write("buah-buahan : " + "</br>")
// document.write("data buah-buahan : " + buah2 + "</br>")

// document.write("shift 1 : " + buah2.shift() +"</br>")
// document.write("data buah-buahan : " + buah2 + "</br>")
// document.write("shift 2 : " + buah2.shift() +"</br>")
// document.write("sisa buah : " + buah2 + "</br>")
// document.write("=======================================================")

// unshift
// var buah = ["Jeruk","Mangga","Jambu","Apel","Nangka"]
// document.write("Buah-buahan : " + "</br>")
// document.write("   Buah-buahan : " + buah + "</br>")
// buah.unshift("Melon")
// document.write("Setelah unshift buah buahan : " + buah +"</br>")

// document.write("=======================================================")

var buah = ["Jeruk","Mangga","Jambu","Apel","Nangka"]
document.write("Buah-buahan : " + "</br>")
document.write("Buah-buahan : " + buah + "</br>")
document.write("Slice : " + buah.slice (1,2) +"</br>")
document.write("Slice : " + buah.slice (2) +"</br>")
document.write("Slice : " + buah.slice (1,-2) +"</br>")
document.write("Slice : " + buah.slice (-2) +"</br>")
document.write("Slice : " + buah.slice (-1) +"</br>")
document.write("Slice : " + buah.slice (0) +"</br>")
document.write("=======================================================")

