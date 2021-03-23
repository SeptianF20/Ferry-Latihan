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
	<h3>Input Data Baru</h3>
	<form action="input-aksi.php" method="POST">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td>Jenis Kelamin</td>
				<td>
                     <input type="radio" id="pria" name="jeniskelamin" value="PRIA">
                      <label for="male">PRIA</label>
                     <input type="radio" id="wanita" name="jeniskelamin" value="WANITA">
                      <label for="male">WANITA</label>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="agama">
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
				<td><input type="text" name="pekerjaan"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>