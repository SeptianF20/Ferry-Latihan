function tampilkan() {
	//nama
	var nama = (document.form.nama.value);
	document.form.namaout.value = nama;
	
	//nim
	var nim = (document.form.nim.value);
	document.form.nimout.value = nim;

	//jenis kelamin
	var jk = (document.form.jk.value);
	document.form.jkout.value = jk;

	//agama
	var agama = (document.form.agama.value);
	document.form.agamaout.value = agama;

	//essay
	var essay = (document.form.essay.value);
	document.form.essayout.value = essay;

	//status
	var status="";
	if (document.form.Menikah.checked == true) {
		status = "Menikah";
	}else if (document.form.BelumMenikah.checked == true) {
		status = "Belum Menikah";
	}
	document.form.statusout.value = status;

	//program studi
	var prodi="";
	if (document.form.TIF.checked == true) {
		prodi = "TIF";
	} else if (document.form.TKK.checked == true) {
		prodi = "TKK";
	} else if (document.form.MIF.checked == true) {
		prodi = "MIF";
	}
	document.form.prodiout.value = prodi;
}