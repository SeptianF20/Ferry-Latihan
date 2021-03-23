<form method="post" autocomplete="off" action="pesanan.php">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Nama Pembeli</label>
		<div class="col-sm-10">
			<input type="text" name="nama" class="form-control form-control-user">
		</div>
	</div>
	<?php 
		for ($i=0; $i<$jumlah ; $i++) { 
			# code...
	?>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Menu</label>
			<div class="col-sm-8">
				<select name="menu[]" class="form-control form-control-user">
					<option value="Bakso">Bakso</option>
					<option value="Mie Bakso">Mie Bakso</option>
					<option value="Mie Ayam">Mie Ayam</option>
					<option value="Es Teh">Es Teh</option>
				</select>
			</div>
			<div class="col-sm-2">
				<input type="number" name="jumlah[]" class="form-control form-control-user">
			</div>
		</div>
	<?php
		}
	 ?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label"></label>
    	<div class="col-sm-10">
    		<button type="submit" class="btn btn-primary">Tambah</button>
      		<button type="reset" class="btn btn-warning">Reset</button>
    	</div>
  	</div>
</form>
