<?php 
	session_start();
	include 'koneksi.php';
	$email = $_POST['email'];
	$password = $_POST['password']; 
	$querySql = mysqli_query($koneksi,"SELECT * FROM login WHERE email='$email'");
	$data = mysqli_fetch_array($querySql);
	if ($email == $data['email']) {
		if ($password == $data['password']) {
			header("location:index.php?pesan=berhasil");
		} else {
			header("location:login.php?pesan=gagal");
		}
	}else{
		header("location:login.php?pesan=gagal");
	}
 ?>