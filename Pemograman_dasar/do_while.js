////////////////////// DO While /////////////////////
var jumlah,nama, nilai , Grade , n  ,nim

jumlah = prompt("Jumlah Mahasiswa" + "")
n = 1
do{
nama = prompt("Nama Mahasiswa " + n + "")
nim = prompt("NIM Mahasiswa " + "")
nilai = prompt("Nilai Mahasiswa " + n + "")
nilai=eval(nilai) 
document.write("<h2 align=center> Cek Grade Nilai Mahasiswa </h2>")
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
            
    
    document.write("<h2>Mahasiswa "+n+ "</h2>" + "</br>")
    document.write("Nama Mahasiswa: "+ nama + "</br>")
    document.write("NIM Mahasiswa: "+ nim + "</br>")
    document.write("Nilai Mahasiswa: "+ nilai + "</br>")
    document.write("Status Nilai Mahasiswa:  "+ Grade + "</br>")
    document.writeln("<hr width='850' align='center' color='yellow'> </hr>")
    document.writeln("<hr width='850' align='center' color='yellow'> </hr>")

    }

    n++ }
    while(n<=jumlah)

