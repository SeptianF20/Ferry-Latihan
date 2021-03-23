////////////////////// While /////////////////////
var jumlah,nama, nilai , Grade , n  


nama = prompt("Nama Mahasiswa " + "")
nim = prompt("NIM Mahasiswa " + "")
jumlah = prompt("Berapa Nilai yang di Cek " + "")
document.write("<h2 align=center> Cek Grade Nilai Mahasiswa </h2>")
document.write("Nama Mahasiswa : "+ nama + "</br>")
document.write("NIM Mahasiswa : "+ nim + "</br>")
document.write("<table border=1px align=center><tr><td>Nilai</td><td>Grade</td>")
document.writeln("<hr width='850' align='center' color='yellow'> </hr>")
document.writeln("<hr width='800' align='center' color='yellow'> </hr>")
n = 1
while(n<=jumlah){
nilai = prompt("Nilai ke-" + n + "")
nilai=eval(nilai)

{
    if(nilai >=90  && nilai <=100){
    Grade = " A "
    }
    else if(nilai >=80 && nilai <90)
    {
    Grade  = " B " 
    }
    else if(nilai >=60 && nilai <80)
    {
    Grade = " C "
    }
    else if(nilai >=50 && nilai <60)
    {
    Grade = " D "   
    }
     else if(nilai >=0 && nilai <59)
    {
     Grade = " E "   
    }
    {        
        document.write("<tr><td>" + nilai + "</td><td>" + Grade + "</td>")
    
    
    } n++
}
}

