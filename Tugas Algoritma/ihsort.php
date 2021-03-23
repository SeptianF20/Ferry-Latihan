<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Check-Up Pasien</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
            <fieldset style="width: 50%;">
                <h3>Jadwal Pasien</h3>
                <form action="ihsort.php" method="POST">
<?php
// hasil sorting ascending//
$a=$_POST['inisialisasi'];
$b=$_POST['jumlah'];
$c=$_POST['jenis'];
$r=('1');

if ($b>$a && $c=="Ascending"){
for ($i=$a; $i<=$b; $i++){
  echo "<li>Pasien $i Check-Up jam ke-$r</li><br>";}
}
elseif ($b<$a){
  echo "Jumlah Pasien harus lebih banyak atau sama dengan dari Urutan Pasien <br> Silahkan input ulang";} 
else{
for ($i=$b; $i>=$a; $i--){
  echo "<li>Pasien $i Check-Up jam ke-$r</li><br>";}
}
?>
</fieldset>
</center>
</body>
</html>