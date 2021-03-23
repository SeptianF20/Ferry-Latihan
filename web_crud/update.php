<?php 
	include 'koneksi.php';
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$agama = $_POST['agama'];
	$pekerjaan = $_POST['pekerjaan'];

	mysqli_query($koneksi,"update user set nama='$nama', alamat='$alamat', jeniskelamin='$jeniskelamin', agama='$agama', pekerjaan='$pekerjaan' where id='$id'");

	header("location:index.php?pesan=update");
?>