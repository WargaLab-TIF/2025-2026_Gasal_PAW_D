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
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pendataan Layanan Kesehatan</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="page-wrap">
		<div class="form-card">
			<header class="card-header">
				<h1>Pendataan Layanan Kesehatan</h1>
				<p class="subtitle">Isilah data pasien/layanan dengan benar</p>
			</header>

			<form action="index.php" method="POST" novalidate>
				<fieldset>
					<?php if(isset($_POST['submit']) and count($error) == 0) :?>
						<div class="success">
							<h2>FORM BERHASIL ANDA KIRIM</h2>
							<p>Terima kasih. Data telah tersimpan (contoh output)</p>
						</div>
					<?php else: ?>
						<?php require "form.php"; ?>
					<?php endif ?>
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>
