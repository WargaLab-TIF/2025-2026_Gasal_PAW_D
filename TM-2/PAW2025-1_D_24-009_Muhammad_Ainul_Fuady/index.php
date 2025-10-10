<?php
	
	require "fungsi.php";

	if(isset($_POST['submit'])) {
		$nama_lengkap = $_POST['nama'];
		$umur = $_POST['umur'];
		$nama_ibu = $_POST['nama_ibu'];
		$nik = $_POST['nik'];
		$password = $_POST['password'];
		$erros = [];
		valName($nama_lengkap, $erros);
		valUmur($umur, $erros);
		valNamaIbu($nama_ibu, $erros);
		valNik($nik, $erros);
		valPassword($password, $erros);
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pembukaan rekening khusus pelajar</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form-container">
		<h1>Pembukaan rekening khusus pelajar</h1>
		<form action="index.php" method="POST">
			<fieldset>
				<?php if(isset($_POST['submit']) and count($erros) == 0) :?>
					<h1>REKENING SUDAH DIBUAT</h1>
					<div class="show-running">
						<p>Nama lengkap : </p>
						<p><?= $nama_lengkap ?></p>
					</div>
					<div class="show-running">
						<p>Umur : </p>
						<p><?= $umur ?></p>
					</div>
					<div class="show-running">
						<p>Nama ibu kandung : </p>
						<p><?= $nama_ibu ?></p>
					</div>
					<div class="show-running">
						<p>NIK : </p>
						<p><?= $nik ?></p>
					</div>
					<div class="show-running">
						<p>Password : </p>
						<p><?= $password ?></p>
					</div>
				<?php else: ?>
					<?php require "form.php"; ?>
				<?php endif ?>
			</fieldset>
		</form>
	</div>
</body>
</html>