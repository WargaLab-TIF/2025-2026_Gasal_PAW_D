<?php
require_once("table_maker.php");

$sizeLimit = 0;
$rule = "";
$color = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$sizeLimit = $_POST['size-limit'];
	$rule = $_POST["rule"];
	$color = $_POST["color"];
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>24-091_Wildan_Haydar_Amru | TM 1</title>

		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>

	<body>
		<div class="container">
			<div id="input-section">
				<form action="index.php" method="post">
					<div class="size-limit-input">
						<label for="size-limit">Batas Ukuran Tabel:</label>
						<input type="number" name="size-limit" id="size-limit" required>
					</div>

					<div class="rule-input">
						<label for="rule">Aturan:</label>
						
						<select name="rule" id="rule">
							<option value="square-number">Bilangan Kuadrat</option>
							<option value="chess-pattern">Pola Papan Catur</option>
							<option value="composite-number">Bilangan Komposit</option>
							<option value="diagonal-topright-bottomleft">
								Diagonal dari kanan atas ke kiri bawah
							</option>
						</select>
					</div>

					<div class="color-input">
						<label for="color">Warna:</label>

						<select name="color" id="color">
							<option value="cyan">Cyan</option>
							<option value="green">Green</option>
							<option value="yellow">Yellow</option>
						</select>
					</div>

					<div class="buttons">
						<button type="submit">Submit</button>
						<button type="reset">Reset</button>
					</div>
				</form>
			</div>

			<div id="view-section">
				<?php tableMaker($sizeLimit, $rule, $color); ?>
			</div>
		</div>
	</body>
</html>