<!-- input nama -->
<div class="input-box">
	<div class="input-container">
		<label for="nama">Masukkan nama lengkap anda</label>
		<input type="text" name="nama" id="nama" value="<?php if(isset($erros) && (!isset($erros['nama']))) {echo $_POST['nama'];}?>">
	</div>
	<span class="eror"> <?= $erros["nama"] ?? ""?> </span>
</div>

<!-- inputan umur -->
<div class="input-box">
	<div class="input-container">
		<label for="umur">Masukkan umur anda</label>
		<input type="text" name="umur" id="umur" value="<?php if(isset($erros) && (!isset($erros['umur']))) {echo $_POST['umur'];}?>">
	</div>
	<span class="eror"> <?= $erros["umur"] ?? ""?> </span>
</div>

<!-- inputan nama ibu -->
<div class="input-box">
	<div class="input-container">
		<label for="nama_ibu">Masukkan nama ibu anda</label>
		<input type="text" name="nama_ibu" id="nama_ibu" value="<?php if(isset($erros) && (!isset($erros['nama_ibu']))) {echo $_POST['nama_ibu'];}?>">
	</div>
	<span class="eror"> <?= $erros["nama_ibu"] ?? ""?> </span>
</div>

<!-- inputan nik -->
<div class="input-box">
	<div class="input-container">
		<label for="nik">Masukkan nik anda</label>
		<input type="text" name="nik" id="nik" value="<?php if(isset($erros) && (!isset($erros['nik']))) {echo $_POST['nik'];}?>">
	</div>
	<span class="eror"> <?= $erros["nik"] ?? ""?> </span>
</div>

<!-- inputan password -->
<div class="input-box">
	<div class="input-container">
		<label for="password">Masukkan password anda</label>
		<input type="text" name="password" id="password" value="<?php if(isset($erros) && (!isset($erros['password']))) {echo $_POST['password'];}?>">
	</div>
	<span class="eror"> <?= $erros["password"] ?? ""?> </span>
</div>

<!-- submit button -->
<div class="input-box">
	<div class="input-container">
		<input type="submit" name="submit">
	</div>
</div>