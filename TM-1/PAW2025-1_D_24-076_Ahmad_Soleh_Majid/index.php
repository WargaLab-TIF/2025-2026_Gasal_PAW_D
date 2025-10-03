<?php 
require_once 'function.php';
if(isset($_GET['submit'])){
	$ukuran = $_GET['ukuran'];
	$aturan = $_GET['aturan'];
	$warna = $_GET['warna'];
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>24-076_Ahmad Soleh Majid_TM-1(Genap)</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<form method="GET">
 		<p>Ukuran : <input type="number" name="ukuran"></p>
 		<p>Aturan : <select name="aturan">
 			<option value="kubik">Warnai bilangan kubik (n³)</option>
 			<option value="batas">Pola perbatasan (outer border)</option>
 			<option value="prima">Warnai bilangan prima</option>
 			<option value="diagonal">Arsiran diagonal</option>
 		</select></p>
 		<p>Warna : <select name="warna">
 			<option value="cyan">Cyan</option>
 			<option value="blue">Biru</option>
 			<option value="red">Red</option>
 			<option value="yellow">yellow</option>
 		</select></p>


 		<button type="submit" name="submit">KIRIM</button>
 	</form>
 	<?php 
 	if (isset($_GET['submit'])) {
 		maketable($ukuran,$aturan,$warna);
 	}
 	
 	 ?>
 </body>
 </html>