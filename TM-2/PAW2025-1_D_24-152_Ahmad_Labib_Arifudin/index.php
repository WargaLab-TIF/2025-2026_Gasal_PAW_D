<?php 
require 'validasi.php';
if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$gender=$_POST['gender'];
	$umur=$_POST['umur'];
	$alamat=$_POST['alamat'];
	$tel=$_POST['tel'];
	$bb=$_POST['bb'];
	$tb=$_POST['tb'];
	$suhu=$_POST['suhu'];
	$errors=[];

	valnama($nama,$errors);
	valgender($gender,$errors);
	valumur($umur,$errors);
	valalamat($alamat,$errors);
	valnomor($tel,$errors);
	valtb($tb,$errors);
	valbb($bb,$errors);
	valsuhu($suhu,$errors);
}
 ?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TM 2 PAW</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container_form">
		<h1>Pemeriksaan Kesehatan</h1>
		<form method="POST">
			<fieldset>
				<?php if(isset($errors) && count($errors) == 0 ): ?>
					<h1>Sukses</h1>
					<h1>Jaga Selalu Kesehatan Anda</h1>
				<?php else: ?>
					<?php require 'form.php'; ?>				
				<?php endif; ?>
			</fieldset>
		</form>
	</div>
</body>
</html>