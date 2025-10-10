<!-- input nik -->
<div class="input-box">
	<div class="input-container">
		<label for="nik">Masukan NIK Anda :</label>
		<input type="text" name="nik" id="nik" value="<?= $nik??""?>">
	</div>	
	<span class="eror"><?= $errors['nik']??""?></span>
</div>

<!-- input nama -->
<div class="input-box">
	<div class="input-container">
		<label for="nama">Masukan Nama Anda :</label>
		<input type="text" name="nama" id="nama" value="<?= $nama??""?>">
	</div>
	<span class="eror"><?= $errors['nama']??""?></span>
</div>

<!-- input umur -->
<div class="input-box">
	<div class="input-container">
		<label for="umur">Masukan Umur Anda :</label>
		<input type="text" name="umur" id="umur" value="<?= $umur??""?>">
	</div>	
	<span class="eror"><?= $errors['umur']??""?></span>
</div>

<!-- input ibu -->
<div class="input-box">
	<div class="input-container">
		<label for="ibu">Masukan Nama IBU Kandung :</label>
		<input type="text" name="ibu" id="ibu" value="<?= $ibu??""?>">
	</div>
	<span class="eror"><?= $errors['ibu']??""?></span>
</div>

<!-- input password -->
<div class="input-box">
	<div class="input-container">
		<label for="password">Masukan Password :</label>
		<input type="text" name="password" id="password" value="<?= $password??""?>">
	</div>	
	<span class="eror"><?= $errors['password']??""?></span>
</div>

<!-- input boten -->
<div class="input-box">
	<div class="input-container">
		<input type="submit" name="submit">
	</div>
</div>