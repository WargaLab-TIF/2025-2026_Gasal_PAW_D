<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Table</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form name="table" action="index.php" method="POST">
		<table>
			<tr>
				<td>
					<label>Ukuran :</label>
				</td>
				<td><input type="number" name="inputan" placeholder="Masukan Ukuran" required></td>
			</tr>
			<tr>
				<td>
					<label>Pilih Warna :</label>
				</td>
				<td>
					<select name="warna">
						<option value="red">Merah</option>
						<option value="blue">Biru</option>
						<option value="green">Hijau</option>
						<option value="yellow">Kuning</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label>Pilih Pola :</label>
				</td>
				<td>
					<select name="aturan">
						<option value="kuardat">Bacground Kuardat</option>
						<option value="catur">Bacground Catur</option>
						<option value="komposit">Bacground Komposit</option>
						<option value="diagonal">Bacground Diagonal</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit">Submit</button>
				</td>
			</tr>
		</table>
	</form>
	<?php 
	require "fungsi.php";
	if(isset($_POST['inputan'])){
		$Ukuran = $_POST['inputan'];
		$Warna = $_POST['warna'];
		$Aturan = $_POST['aturan'];

		pola($Ukuran,$Warna,$Aturan);
	}
 ?>
</body>
</html>

