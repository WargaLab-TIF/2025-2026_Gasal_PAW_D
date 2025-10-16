<div class="input-box">
	<div class="input-container">
		<label >Nama lengkap</label>
		<input type="text" name="nama" value="<?= $nama ?? "" ?>">
	</div>
	<span class="eror"><?= $eror['nama']?? "" ?>
	</span>
</div>

<!-- kode unik -->
<div class="input-box">
	<div class="input-container">
		<label >Masukkan password</label>
		<input type="text" name="password" value="<?= $password ?? "" ?>">
	</div>
	<span class="eror"><?= $eror['password']??""?></span>
</div>

<!-- input no -->
<div class="input-box">
	<div class="input-container">
		<label >Masukkan no telepon</label>
		<input type="text" name="no" value="<?= $no ?? "" ?>">
	</div>
	<span class="eror"><?= $eror['no']?? "" ?>
	</span>
</div>

<!-- NIK -->
<div class="input-box">
	<div class="input-container">
		<label >Masukkan NIK</label>
		<input type="text" name="nik" value="<?= $nik ?? ""?>">
	</div>
	<span class="eror"><?= $eror['nik'] ?? ""?></span>
</div>

<div class="input-box">
	<div class="input-container">
		<label>Masukkan Pin</label>
		<input type="text" name="pin" value="<?= $pin ?? ""?>">
	</div>
	<span class="eror"><?= $eror['pin'] ?? ""?></span>
</div>

<!-- submit button -->
<div class="input-box">
	<div class="input-container">
		<input type="submit" name="submit">
	</div>
</div>