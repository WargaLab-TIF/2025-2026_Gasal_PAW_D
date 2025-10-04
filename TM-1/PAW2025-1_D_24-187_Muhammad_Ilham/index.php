<?php 
include "fungsi.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>24-187_Muhammad_Ilham | TM 1</title>
	<link rel="stylesheet" href="style.css">
</head>	
<body>
	<form action="index.php" method="post">

		<!-- Batas Ukuran -->
		<div class="label">
			<label for="batas_ukuran">Batas Ukuran Table:</label>
			<input type="number" name="batas_ukuran" min="1" id="batas_ukuran" required>
		</div>

		<!-- Aturan -->
		<div class="label">
			<label for="filter">Aturan:</label>
			<select name="filter" id="filter">
				<option value="kuadrat">Bilangan Kuadrat</option>
				<option value="catur">Pola Papan Catur</option>
				<option value="komposit">Bilangan Komposit</option>
				<option value="diagonal">Diagonal Kanan atas ke kiri bawah</option>
			</select>
		</div>

		<!-- Warna -->
		<div class="label">
		<label for="warna">Warna:</label>
		<select name="warna" id="warna">
			<option value="red">Merah</option>
			<option value="green">Hijau</option>
			<option value="yellow">Kuning</option>
		</select>
		</div>
	
		<!-- button -->
		<button type="submit">Submit</button>

	</form>

	<?php 
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$batas = $_POST['batas_ukuran'];
		$filter = $_POST['filter'];
		$warna = $_POST['warna'];

		table_pangkat($batas, $filter, $warna);
	}

	 ?>
</body>
</html>