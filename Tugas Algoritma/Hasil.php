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
                	<?php if (isset($_POST['menu'])): ?>
	 				<p class="card-text">Nama : <?php echo $nama; ?></p>
	 				<p class="card-text">Jumlah Beli : <?php echo $total_pembelian; ?></p>
	 				<p class="card-text">List Pesanan : </p>
	 				<p class="card-text">
	 					<?php 
	 						for ($i=0; $i<$total_menu ; $i++) { 
								echo "-". $pesanan[$i]['nama']." x".$pesanan[$i]['jumlah'] ."<br>";
							}
	 					 ?>
	 				</p>
	 				<p class="card-text">Total Bayar : <?php echo $total ?> </p>
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