<?php 
	include 'koneksi.php';
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];

	mysqli_query($koneksi,"insert into user values ('','$nama','$alamat','$jeniskelamin','$agama','$pekerjaan')");

	header("location:index.php?pesan=input");
?>