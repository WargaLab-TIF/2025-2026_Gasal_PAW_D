<?php 
	require_once 'process.php';

	$errors = array();
	$is_success = false;

	if (isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$ename = $_POST['ename'];
		$nik = $_POST['nik'];
		$address = $_POST['address'];
		$nohp = $_POST['nohp'];
		$tbbb = $_POST['tbbb'];
		$darah = $_POST['blood'];

		validateName($fname,$errors);
		validateLName($ename,$errors);
		validateNik($nik,$errors);
		validateNohp($nohp,$errors);
		validateTbbb($tbbb,$errors);
		validateBlood($darah,$errors);


		if (empty($errors)) {
        $is_success = true;
    }
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>TM-2</title>
</head>
<body>
	<div class="form-container">
	<fieldset>
			<legend><h2>Form Pelayanan Masyrakat</h2></legend>
			<?php if ($is_success): ?>
	            <h2>FORM BERHASIL ANDA KIRIM</h2>
	            <p>Terima kasih, data Anda telah kami terima.</p>

	        <?php else: ?>
			<form action="index.php" method="POST">
			<div class="input-container">
				<label for="fname">Nama Depan: </label>
				<input id="fname" type="text" name="fname" placeholder="Nama Depan" value="<?= $fname ?? ''?>">
			</div>
			<span class="eror"> <?= $errors['fname'] ?? ""?></span>
			<div class="input-container">
				<label for="ename">Nama Belakang: </label>
				<input id="ename" type="text" name="ename" placeholder="Nama Belakang" value="<?= $ename?? ''?>">
			</div>
			<span class="eror"> <?= $errors['ename'] ?? ""?></span>
			<div class="input-container">
				<label for="nik">NIK: </label>
				<input id="nik" type="text" name="nik" placeholder="35xxxx" value="<?= $nik ?? ''?>">
			</div>
			<span class="eror"> <?= $errors['nik'] ?? ""?></span>
			<div class="input-container">
				<label for="address">Alamat: </label>
				<input id="address" type="text" name="address" placeholder="Alamat" value="<?= $address ?? ''?>">
			</div>
			<span class="eror"> <?= $errors['address'] ?? ""?></span>
			<div class="input-container">
				<label for="tbbb">Tinggi Badan/Berat Badan: </label>
				<input id="tbbb" type="text" name="tbbb" placeholder="Contoh:170cm/70kg" value="<?= $tbbb ?? ''?>">
			</div>
			<span class="eror"> <?= $errors['tbbb'] ?? ""?></span>
			<div class="input-container">
				<label for="blood">Golongan Darah: </label>
				<input id="blood" type="text" name="blood" placeholder="Contoh:A" value="<?= $darah ?? ''?>">
			</div>
			<span class="eror"> <?= $errors['blood'] ?? ""?></span>
			<label for="male">Kelamin: </label>
			<input type="radio" id="male" name="gender" value="male">Pria
			<input type="radio" id="female" name="gender" value="female">Wanita<br>
			<div class="input-container">
				<label for="nohp">No Handphone: </label>
				<input id="nohp" type="text" name="nohp" placeholder="08xxxxx" value="<?= $nohp ?? ''?>">
			</div>
			<span class="eror"> <?= $errors['nohp'] ?? ""?></span>
			<input name="submit" type="submit">
	</form>
			<?php endif?>
	</fieldset>
	</div>
</body>
</html>