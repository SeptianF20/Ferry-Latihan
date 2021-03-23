<?php
$koneksi = mysqli_connect("localhost","root","","user");

if(mysqli_connect_error()){
	echo "Koneksi Database Gagal : " . mysqli_connect_error();
}
?>