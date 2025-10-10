<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Pembukaan Rekening</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="blur"></div>
	<div class="lapisanSatu">
		<?php 
		$errors = [];
			if ($_SERVER['REQUEST_METHOD']=='POST') {
					require 'fungsi.php';
					cekNamaLengkap($errors, $_POST, 'nama');
					cekUsername($errors,$_POST, 'username');
					cekKTP($errors, $_POST, 'ktp');
					cekAlamat($errors, $_POST, 'alamat');
					cekNomor($errors, $_POST, 'nomor');
					cekNamaibu($errors, $_POST, 'ibu');
					cekJenis($errors, $_POST, 'jenis');
					cekSetoran($errors, $_POST, 'setoran');

					if ($errors) {
						include 'form.php';
					} else {
						echo "<p>Form submitted successfully with no errors</p>";
					} 
				} else {
					include 'form.php';
				}
		 ?>
	</div>
</body>
</html>