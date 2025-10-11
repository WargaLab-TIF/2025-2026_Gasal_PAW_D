<?php  require_once 'fungsi.php';  ?>

<?php 
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$password = $_POST['password'];
	$nik = $_POST['nik'];
	$telpon = $_POST['telpon'];

	$errors = [];

	valid_nama($nama, $errors);
	valid_nik($nik, $errors);
	valid_pass($password, $errors);
	valid_telp($telpon, $errors);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>24-187_Muhammad_Ilham_TM-2</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>FORMULIR PENDAFTARAN BANK</h1>
		<form action="index.php" method="post">
			<?php if (isset($_POST['submit']) && count($errors) == 0):?>
				<h1>Form Berhasil dikirim</h1>
			<?php else: ?>
				<?php require 'form.php' ?>
			<?php endif; ?>
		</form>
	</div>
</body>
</html>