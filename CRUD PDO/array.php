<!DOCTYPE html>
<html>
<head>
	<title>coba</title>
</head>
<body>
	<form method="post">
		<input type="text" name="nama[]">
		<input type="submit" name="coba">
	</form>
	<?php 
		if (isset($_POST['coba'])) {
			$coba = $_POST['nama'];

			var_dump($coba);
		}
	?>
</body>
</html>