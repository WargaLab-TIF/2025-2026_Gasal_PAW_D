<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>24-009 Tabel perpangkatan</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<div class="form-all">

			<!-- start form -->
			<form action="index.php" method="post">

				<!-- start batas ukuran -->
				<div class="batas-ukuran">
					<h4>Batas Ukuran</h4>
					<label for="batas_ukuran">Masukkan angka : </label>
					<input type="number" name="batas_ukuran" id="batas_ukuran">
					<button type="submit" name="submit">Kirim</button>
				</div>
				<!-- end batas ukuran -->

				<!-- start warna filter tampilan -->
				<div class="warna-filter-tampilan">
					<h4>Warna filter tampilan</h4>
					<select name="warna_filter_tampilan" id="warna_filter_tampilan">
						<option value="green">Green</option>
						<option value="orange">Orange</option>
						<option value="lightblue">Light Blue</option>
						<option value="red">Red</option>
					</select>
				</div>
				<!-- end warna filter tampilan -->

				<!-- start aturan filter tampilan -->
				<div class="aturan-filter-tampilan">
					<h4>Aturan filter tampilan</h4>
					<select name="aturan_filter_tampilan" id="aturan_filter_tampilan">
						<option value="bilanganKuadrat">Bilangan Kuadrat</option>
						<option value="papanCatur">Papan Catur</option>
						<option value="bilanganKomposit">Bilangan Komposit</option>
						<option value="polaArsiran">Pola Arsiran</option>
					</select>
				</div>
				<!-- end aturan filter tampilan -->

			</form>
			<!-- end form -->

		</div>
	</div>
	<?php
	include "function.php";
	if (isset($_POST['submit'])) {
		sizeLimit($_POST['batas_ukuran'], $_POST['aturan_filter_tampilan'], $_POST['warna_filter_tampilan']);
	}
	?>
</body>

</html>