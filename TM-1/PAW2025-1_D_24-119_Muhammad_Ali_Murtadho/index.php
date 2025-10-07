<?php 
require_once('fungsi_tabel.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabel Perpangkatan</title>
	<!-- <style> -->
		
	<!-- </style> -->
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="index.php" method="POST">
		<div>
		<label for="baris">Jumlah Baris dan Kolom</label>
		<input type="number" name="baris" id="baris" required>
		</div>
		<div>
		<label for="warna">Warna</label>
		<select name="warna" id="warna">
			<option value="Yellow">Yellow</option>
			<option value="Magenta">Magenta</option>
			<option value="Cyan">Cyan</option>

		</select>
		</div>
		<div>
		<label for="Tampilan">Tampilan</label>
		<select name="Tampilan" id="Tampilan">
			<option value="Kuadrat">Bilangan Kuadrat</option>
			<option value="Catur">Catur</option>
			<option value="Komposit">Komposit</option>
			<option value="Arsir">Arsir</option>
		</select>
		</div>
		<div>
		<button name="submit">Submit</button>
		</div>
	</form>
	<?php  
	if (isset($_POST['submit'])) {
		$baris = $_POST['baris'];
		$tampilan = $_POST['Tampilan'];
		$warna = $_POST['warna'];
		echo "<br>";
		echo "<hr>";
		echo "
		<div class='content'>
		<div>
		<span class='title'>Jumlah Baris dan Kolom</span><span>: $baris</span><br>
		<span class='title'>Warna </span><span>: $warna</span><br>
		<span class='title'>Tampilan </span><span>: $tampilan</span><br>
		</div>
		</div>
		<div class='content'>

		";
		tampil_tabel($baris, $tampilan, $warna);
		echo "</div>";
	}
	?>
</body>
</html>