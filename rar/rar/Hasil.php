<?php  
    if (isset($_POST['submit'])) {
        $id = @$_POST['id'];
        $nama = @$_POST['nama'];
        $jam = @$_POST['jam'];
        $data = array();
        foreach ($id as $key => $value) {
            array_push($data, array(
                'id' => $value,
                'nama' => $nama[$key],
                'jam' => $jam[$key]
            ));
        }
        var_dump($jam);
    }
?>
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
        <div >
            <h1 class="h3 mb-0 text-gray-800">Jadwal Check-Up Pasien</h1>
                <div class="card-body">
                    <hr>
                    <?php if (isset($_POST['submit'])): ?>
                      <?php foreach ($data as $key => $pasien): ?>
                        <p class="card-text">ID Pasien : <?php echo $pasien['id']; ?></p><br>
                        <p class="card-text">Nama Pasien : <?php echo $pasien['nama']; ?></p><br>
                        <p class="card-text">Jam Pemeriksaan : <?php echo $pasien['jam'] ?> </p>
                        <hr>
                      <?php endforeach ?>
	 				<?php endif ?>
                </div>
               </div>
          	</div>
          </div>
        </div>
 </fieldset>
</center>
</body>
</html>