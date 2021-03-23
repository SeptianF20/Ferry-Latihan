<?php 
	include 'header.php'; 
	if (isset($_POST['menu'])) {
		$nama = $_POST['nama'];
		$menu = @$_POST['menu'];
		$jumlah = $_POST['jumlah'];
		# code...
		var_dump($menu);
		$harga = 0;
		$pesanan = array();
		for ($i=0; $i<count($menu) ; $i++) { 
			$pilih = $menu[$i];
			switch ($pilih) {
				case 'Bakso':
					# code...
					$harga = 15000;
					break;
				case 'Mie Bakso':
					# code...
					$harga = 20000;
					break;
				case 'Mie Ayam':
					# code...
					$harga = 10000;
					break;
				case 'Es Teh':
					# code...
					$harga = 2500;
					break;
				
				default:
					# code...
					break;
			}
			array_push($pesanan, array(
				'nama' => $menu[$i],
				'harga'=> $harga,
				'jumlah'=>$jumlah[$i]));
		}
		//print_r($pesanan);
		$total_menu = count($pesanan);
		$total_pembelian = array_sum(array_column($pesanan, 'jumlah'));
		$bayar = array_sum(array_column($pesanan, 'harga'));
		if ($nama == 'Agus') {
			# code...
			$diskon = (($bayar*15)/100);
			$total = $bayar - $diskon;
		}else if ($total_pembelian >= 4) {
			# code...
			$diskon = (($bayar*5)/100);
			$total = $bayar - $diskon;
		}else {
			$total = $bayar;
		}
	}
?>
<!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pesanan</h1>
          </div>
          <!-- Content Row -->
          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4 border-left-primary">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pesanan</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <!-- Card Body -->
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
<?php include 'footer.php'; ?>