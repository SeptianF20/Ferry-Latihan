<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari Database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari Database</h2>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi,"select * from user where id='$id'");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="POST">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
                     <input type="radio" id="pria" name="jeniskelamin" value="PRIA" value="<?php echo $data['alamat'] ?>">
                      <label for="male">PRIA</label>
                     <input type="radio" id="wanita" name="jeniskelamin" value="WANITA" value="<?php echo $data['alamat'] ?>">
                      <label for="male">WANITA</label>
                </td>
            </tr>
           <tr>
                <td>Agama</td>
                <td>
                    <select name="agama" value="<?php echo $data['agama'] ?>">
                        <option>Islam</option>
                        <option>Katolik</option>
                        <option>Protestan</option>
                        <option>Hindhu</option>
                        <option>Budha</option>
                        <option>Konghuchu</option>
                        <option>Percaya Tuhan</option>
                  </td>
            </tr>
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>