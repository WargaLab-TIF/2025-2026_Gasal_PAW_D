<!-- input nama -->
<div class="input-box">
	<div class="input-container">
		<label for="nama">Masukkan nama lengkap anda</label>
		<input type="text" name="nama" id="nama" 
			<?php 
				if(isset($erros) && (!isset($erros["nama"])))
			:?>
			<?php $nama = $_POST["nama"]; ?>
				value = "<?= $nama ?>"
			<?php endif ?>
		>
	</div>
	<span class="eror"> <?= $erros["nama"] ?? ""?> </span>
</div>

<!-- inputan umur -->
<div class="input-box">
	<div class="input-container">
		<label for="umur">Masukkan umur anda</label>
		<input type="text" name="umur" id="umur"
			<?php 
				if(isset($erros) && (!isset($erros["umur"])))
			:?>
			<?php $umur = $_POST["umur"]; ?>
				value = "<?= $umur ?>"
			<?php endif ?>
		>
	</div>
	<span class="eror"> <?= $erros["umur"] ?? ""?> </span>
</div>

<!-- inputan nama ibu -->
<div class="input-box">
	<div class="input-container">
		<label for="nama_ibu">Masukkan nama ibu anda</label>
		<input type="text" name="nama_ibu" id="nama_ibu"
			<?php 
				if(isset($erros) && (!isset($erros["nama_ibu"])))
			:?>
			<?php $nama_ibu = $_POST["nama_ibu"]; ?>
				value = "<?= $nama_ibu ?>"
			<?php endif ?>
		>
	</div>
	<span class="eror"> <?= $erros["nama_ibu"] ?? ""?> </span>
</div>

<!-- inputan nik -->
<div class="input-box">
	<div class="input-container">
		<label for="nik">Masukkan nik anda</label>
		<input type="text" name="nik" id="nik"
			<?php 
				if(isset($erros) && (!isset($erros["nik"])))
			:?>
			<?php $nik = $_POST["nik"]; ?>
				value = "<?= $nik ?>"
			<?php endif ?>
		>
	</div>
	<span class="eror"> <?= $erros["nik"] ?? ""?> </span>
</div>

<!-- inputan password -->
<div class="input-box">
	<div class="input-container">
		<label for="password">Masukkan password anda</label>
		<input type="text" name="password" id="password"
			<?php 
				if(isset($erros) && (!isset($erros["password"])))
			:?>
			<?php $password = $_POST["password"]; ?>
				value = "<?= $password ?>"
			<?php endif ?>
		>
	</div>
	<span class="eror"> <?= $erros["password"] ?? ""?> </span>
</div>

<!-- submit button -->
<div class="input-box">
	<div class="input-container">
		<input type="submit" name="submit">
	</div>
</div>