<?php 
	
	require 'validasi.php';


	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$no = $_POST['no'];
		$password = $_POST['password'];
		$nik = $_POST['nik'];
		$pin = $_POST['pin'];

		$eror = []; 

		valNama($nama, $eror);
		no_tlp($no,$eror);
		pass($password,$eror);
		nik($nik,$eror);
		pin($pin,$eror);

			
	}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form aktivasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form-container">
		<h1>aktivasi rekening</h1>
		<form method="post">
			<fieldset>
				<?php if (isset($_POST['submit']) && count($eror) == 0): 
				 ?>
				 <h1>berhasil aktivasi</h1> 
				 <?php require 'success.php'; ?>
				<?php else: ?>
				<?php require 'form.php'; ?>
			<?php endif; ?>
			</fieldset>
		</form>
	</div>
</body>
</html>