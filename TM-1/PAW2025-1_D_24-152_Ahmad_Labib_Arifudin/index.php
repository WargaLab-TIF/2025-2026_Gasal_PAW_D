<?php include 'prosesData.php' ?>
<!DOCTYPE html>  
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabel modulus(baris % kolom)</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form method="POST">
		<table class="table1">
			<tr>
				<th><label for="ukuran">Ukuran :</label></th>
				<td><input type="number" name="ukuran" min="1" id="ukuran" required></td>
			</tr>
			<tr>
				<th><label for="aturan">Aturan :</label></th>
				<td>
					<select name="aturan" id="aturan" required>
						<option value="">--pilih--</option>
						<option value="kubik">Bilangan Kubik</option>
						<option value="batas">Perbatasan</option>
						<option value="prima">Bilangan prima</option>
						<option value="diagonal">Arsiran Diagonal</option>
					</select>
				</td>
			</tr>
			<tr>
				<th><label for="warna">Warna :</label></th>
				<td>
					<select name="warna" id="warna" required>
						<option value="">--pilih--</option>
						<option value="red">Red</option>
						<option value="yellow">Yellow</option>
						<option value="green">Green</option>
						<option value="pink">Pink</option>
					</select>	
				</td>
			</tr>
			<tr>
				<td><button type="submit">submit</button></td>
				<td></td>
			</tr>
		</table>
	</form>
	<table class="table2">
		<?php
		if (isset($_POST['ukuran'])) {
			$ukuran=$_POST['ukuran'];
			$aturan=$_POST['aturan'];
			$warna=$_POST['warna'];
			fungsi($ukuran,$aturan,$warna);
		}

		 ?>
	</table>
</body>
</html>