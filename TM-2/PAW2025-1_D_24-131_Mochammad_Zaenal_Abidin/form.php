<div class="input-box">
	<div class="input-countainer">
		<label for="nama">Masukan nama anda</label>
		<input type="text" name="nama" id="nama" placeholder="masukan nama lengkap sesuai KTP" value="<?= isset($errors['nama']) ? '' : ($nama ?? '') ?>">
		<div>
			<span class="eror"> <?= $errors['nama']??"" ?></span>
		</div>
	</div>
</div>



<div class="input-box">
	<div class="input-container">
		<label for="ibu">Masukan nama Ibu anda</label>
		<input type="text" name="ibu" id="ibu" placeholder="nama gadis ibu anda" value="<?= isset($errors['ibu']) ? '' : ($ibu ?? '') ?>">
		<div>
			<span class="eror"> <?= $errors['ibu']??"" ?></span>
		</div>
	</div>
</div>

<div class="input-box">
	<div class="input-container">
		<label for="nik">Masukan NIK anda</label>
		<input type="text" name="nik" id="nik" placeholder="16 digit NIK" value="<?= isset($errors['nik']) ? '' : ($nik ?? '') ?>">
		<div>
			<span class="eror"> <?= $errors['nik']??"" ?></span>
		</div>
	</div>
</div>

<div class="input-box">
	<div class="input-container">
		<label for="pw">Masukan Password yang ingin anda Gunakan</label>
		<input type="text" name="pw" id="pw" value="<?= isset($errors['pw']) ? '' : ($pw?? '') ?>">
		<div>
			<span class="eror"> <?= $errors['pw']??"" ?></span>
		</div>
	</div>
</div>


<div class="input-box">
	<div class="input-container">
		<label for="pin">Masukan PIN anda</label>
		<input type="text" name="pin" placeholder="pin rekening anda" id="pin" value="<?= isset($errors['pin']) ? '' : ($pin ?? '') ?>">
		<div>
			<span class="eror"> <?= $errors['pin']??"" ?></span>
		</div>
	</div>
</div>


<div class="input-box">
	<div class="input-container">
		<label for="user">Masukan nama panggilan anda</label>
		<input type="text" name="user" id="user" placeholder="maksimal 12 huruf" value="<?= isset($errors['user']) ? '' : ($user ?? '') ?>">
		<div>
			<span class="eror"> <?= $errors['user']??"" ?></span>
		</div>
	</div>
</div>





<div class="input-box">
	<div class="input-container">
		<input type="submit" name="submit" value="Kirim">
	</div>
</div>

