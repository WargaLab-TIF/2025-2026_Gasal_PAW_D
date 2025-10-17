<?php
	
	require "proses.php";

	if(isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$nik = $_POST['nik'];
		$ibu = $_POST['ibu'];
		$pw = $_POST['pw'];
		$pin = $_POST['pin'];
		$user = $_POST['user'];
		$errors = [];
		valNama($nama, $errors);
		valNik($nik, $errors);
		valIbu($ibu,$errors);
		valpw($pw,$errors);
		valPin($pin,$errors);
		valUser($user,$errors);

	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form sederhana</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form-container">
		<h1>Form Digitalisasi Bank BINI</h1>
		<form action="index.php" method="POST">
			<fieldset>
				<?php if(isset($_POST['submit']) and count($errors) == 0) :?>
					<h1>BERHASIL ANDA KIRIM</h1>
				<?php else: ?>
					<?php require "form.php"; ?>
				<?php endif ?>
			</fieldset>
		</form>
	</div>

</body>
</html>