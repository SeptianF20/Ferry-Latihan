<?php
	$data = array(
		'1' => array(
			'nama' => 'Linda Shinta',
			'tinggi' => '120'),
		'2' => array(
			'nama' => 'Okaviana Sari',
			'tinggi' => '115'),
		'3' => array(
			'nama' => 'Luluk Metasari',
			'tinggi' => '123'),
		'4' => array(
			'nama' => 'Asriel Awal',
			'tinggi' => '110'),
		'5' => array(
			'nama' => 'Rakha Bumi',
			'tinggi' => '111'),
		'6' => array(
			'nama' => 'Dewi Ratnasari',
			'tinggi' => '95'),
		'7' => array(
			'nama' => 'Sindy Permatasari',
			'tinggi' => '98'),
		'8' => array(
			'nama' => 'Jingga Lutfia',
			'tinggi' => '112'),
		'9' => array(
			'nama' => 'Shindraswari',
			'tinggi' => '111'),
		'10' => array(
			'nama' => 'Onny Kamaleng',
			'tinggi' => '113')
	);
	$jumlah = 10;
	echo "Data Belum Diurut<br>";
	foreach ($data as $key => $value) {
		echo "Nama : ".$value['nama']." | Tinggi : ".$value['tinggi']."cm <br>";
	}
	echo "<br>";
		for ($j=1; $j<=$jumlah-1 ; $j++) {
			if ($data[$j]['tinggi'] < $data[$j+1]['tinggi']) {
				# code...
				$temp = $data[$j]['tinggi'];
				$data[$j]['tinggi'] = $data[$j+1]['tinggi'];
				$data[$j+1]['tinggi'] = $temp;
				$tes = $data[$j]['nama'];
				$data[$j]['nama'] = $data[$j+1]['nama'];
				$data[$j+1]['nama'] = $tes;
			}
		}
	echo "Data Sudah Diurut";
	foreach ($data as $key => $value) {
		echo "Nama : ".$value['nama']." | Tinggi : ".$value['tinggi']."cm <br>";
	}
?>