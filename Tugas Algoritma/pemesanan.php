        <div class="container-fluid">
          <div class="d-sm-flex align-items-cnter justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pemesanan</h1>
          </div>
          <!-- Content Row -->
          <!-- Content Row -->
          <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4 border-left-primary">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pemesanan</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <form method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="jumlah" name="jumlah" placeholder="Jumlah Menu" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4 border-left-success">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-success">Pesan</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <?php 
                  	$jumlah = @$_POST['jumlah'];
					if ($jumlah) {
						include 'form.php';
					}
                   ?>
                </div>
              </div>
            </div>