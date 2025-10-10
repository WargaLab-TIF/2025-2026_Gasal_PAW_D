<?php
	
	require "fungsi.php";

	if(isset($_POST['submit'])) {
		$username = $_POST['nama'];
		$nik = $_POST['nik'];
		$umur = $_POST['umur'];
		$layanan = $_POST['layanan'];
		$dokter = $_POST['dokter'];
		$error = [];
		valName($username, $error);
		valNik($nik, $error);
		valUmur($umur,$error);
		valLay($layanan,$error);
		valDok($dokter,$error);
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ahmad Soleh Majid_D_Genap</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="form-container">
		<h1>Layanan Kesehatan</h1>
		<form action="index.php" method="POST">
			<fieldset>
				<?php if(isset($_POST['submit']) and count($error) == 0) :?>
					<h1>FORM BERHASIL ANDA KIRIM</h1>
				<?php else: ?>
					<?php require "form.php"; ?>
				<?php endif ?>
			</fieldset>
		</form>
	</div>
</body>
</html>