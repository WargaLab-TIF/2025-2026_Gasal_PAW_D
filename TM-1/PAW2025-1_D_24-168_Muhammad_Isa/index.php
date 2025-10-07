<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TM-1</title>
</head>
<body>
	<?php 
	require_once'process.php';
 	?>
	<form action="index.php" method="POST">
		<table>
			<tr>
				<td><label>Batas: </label></td>
				<td><input type="number" name="batas"></td>
			</tr>
			<tr>
				<td><label>Aturan filter: </label></td>
				<td><select name="filter">
					<option value="vol">Bilangan Kubik</option>
					<option value="bingkai">Bingkai</option>
					<option value="prima">Bilangan Prima</option>
					<option value="diagonal">Diagonal</option>
				</select>
				</td>
			</tr>
			<tr>
				<td><label>Warna: </label></td>
				<td><select name="color">
					<option value="gold">Emas</option>
					<option value="silver">Silver</option>
					<option value="Skyblue">Skyblue</option>
				</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" name="submit">Submit</button></td>
			</tr>
		</table>
	</form>
	<?php 
	if (isset($_POST['submit'])) {
		$ukuran = $_POST['batas'];
		$filter = $_POST['filter'];
		$warna = $_POST['color'];
	Table($ukuran,$filter,$warna);

	}
 ?>
</body>
</html>

