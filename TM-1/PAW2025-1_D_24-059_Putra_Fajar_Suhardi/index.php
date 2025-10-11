<?php require_once 'function.php';?>

<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Welcome !</title>
</head>
<body>
	<form action="index.php" method="POST">
		<h2>Create Your Table !</h2>
			<label id="batas">Batas ukuran : </label>
			<input type="number" name="batas" placeholder="masukkan batas ukuran">

			<label id="warna">Custom Warna : </label>
			<select name="warna">
				<option value="" disabled selected hidden>-- pilih warna --</option>
				<option value="red">Merah</option>
				<option value="green">Hijau</option>
				<option value="blue">Biru</option>
			</select>

			<label id="pola">Custom Pola : </label>
			<select name="pola">
				<option value="" disabled selected hidden>-- pilih pola --</option>
				<option value="kuadrat">Kuadrat</option>
				<option value="catur">Catur</option>
				<option value="komposit">Komposit</option>
				<option value="arsiran">Arsiran</option>
				<option value="cross">Cross</option>
				<option value="ular">Ular Tangga</option>
			</select>

			<div class="kirim">
				<input type="reset" name="reset" value="Clear">
				<input type="submit" name="submit" value="Create">
			</div>
	</form>

	<div class="displayTabel">
		<?php 

			if (isset($_POST['submit'])) {
				$ukuran = $_POST['batas'] ?? 0;
				$warna = $_POST['warna'] ?? 'white' ;
				$pola = $_POST['pola'] ?? '';

				display($ukuran, $warna, $pola);
			}
		?>
	</div>
</body>
</html>