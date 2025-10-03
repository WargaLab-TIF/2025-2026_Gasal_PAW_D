<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tabel hitung</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<form name="tabel" action="index.php" method="POST">
		<table>
			<tr>
				<td>
					<label>Ukuran : </label>	
				</td>
				<td><input type="number" name="Ukuran" placeholder="masukkan ukuran" required></td>
			</tr>
			<tr>
				<td><label>Pilih Warna : </label></td>
				<td><select name="Warna">
					<option value="red">Merah</option>
					<option value="green">Hijau</option>
					<option value="cyan">Cyan</option>
				</select></td>
			</tr>
			<tr>
				<td><label>Pilih Aturan : </label></td>
				<td><select name="Pola">
					<option value="1">Background Angka Kuadrat</option>
					<option value="2">Catur</option>
					<option value="3">Background Bilangan Komposit</option>
					<option value="4">Arsir</option>
				</select></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit">Submit</button>
				</td>
			</tr>
		</table>

	</form>
	<br>
	<hr>
	<?php 
	require 'fungsi.php';

	if (isset($_POST["Ukuran"])){
		$ukuran = $_POST["Ukuran"];
		$warna = $_POST["Warna"];
		$pola = $_POST["Pola"];

		buat_pola($ukuran,$warna,$pola);

		
	}

 ?>
</body>
</html>

