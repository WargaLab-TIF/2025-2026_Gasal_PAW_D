<?php 

require_once "function.php"

 ?>

<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="Container">		
		<form action="index.php" method="POST">
			<h2>Registrasi Nasabah</h2>
				<div class="box">
					<label id="Nama_Panggilan">Nama Panggilan : </label>
					<input name="Nama_Panggilan"  value="<?php echo $_POST['Nama_Panggilan'] ?? ''; ?>">
					<span class="error"><?=$errNama?></span>
				</div>

				<div class="box">				
					<label id="No_Telp">No.Telp : </label>
					<input name="No_Telp" value="<?php echo $_POST['No_Telp'] ?? ''; ?>">
					<span class="error"><?=$errTelp?></span>
				</div>

				<div class="box">
					<label id="Nama_Akun">Nama Akun : </label>
					<input name="Nama_Akun" value="<?php echo $_POST['Nama_Akun'] ?? ''; ?>">
					<span class="error"><?=$errAkun?></span>
				</div>
				
				<div class="box">
					<label id="NIK">NIK : </label>
					<input name="NIK" value="<?php echo $_POST['NIK'] ?? ''; ?>">
					<span class="error"><?=$errNIK?></span>
				</div>

				<div class="box">
					<label id="Password">Password : </label>
					<input name="Password" value="<?php echo $_POST['Password'] ?? ''; ?>">
					<span class="error"><?=$errPw?></span>
				</div>

				<div class="kirim">
					<input type="reset" name="reset" value="Clear">
					<input type="submit" name="submit" value="Create">
				</div>
		</form>

		<?php if(isset($sukses)): ?>
   			<p class="sukses"><?= $sukses ?></p>
		<?php endif; ?>

	</div>
</body>
</html>