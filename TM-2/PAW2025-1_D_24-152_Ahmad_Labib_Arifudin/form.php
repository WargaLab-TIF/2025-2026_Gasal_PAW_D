<div class="input_box">
	<div>
		<label for="nama">Nama :</label>
		<input type="text" name="nama" placeholder="masukkan nama lengkap" id="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama']:"" ?>">
	</div>
	<span><?php if (isset($errors['nama']) && count($errors['nama']) != 0) {
		foreach ($errors['nama'] as $key => $value) {
			echo $value.'*<br>';
		}
	} ?></span>
</div>
<div class="input_box">
	<div>
		<label for="gender">Jenis kelamin :</label>
		<select name="gender" id="gender">
			<option value="lk">Laki laki</option>
			<option value="pr">Perempuan</option>
		</select>
	</div>
	<span><?php 
		if (isset($errors['gender']) && count($errors['gender']) != 0) {
			foreach ($errors['gender'] as $key => $value) {
				echo $value.'*<br>';
			}
		} ?>
	</span>
</div>
<div class="input_box">
	<div>
		<label for="umur">Umur :</label>
		<input type="text" name="umur" id="umur" value="<?php echo isset($_POST['umur']) ? $_POST['umur']:"" ?>">
	</div>
	<span><?php 
		if (isset($errors['umur']) && count($errors['umur']) != 0) {
			foreach ($errors['umur'] as $key => $value) {
				echo $value.'*<br>';
			}
		} ?>
	</span>
</div>
<div class="input_box">
	<div>
		<label for="alamat">Alamat :</label>
		<input type="text" name="alamat" placeholder="masukkan alamat lengkap" id="alamat" value="<?php echo isset($_POST['alamat']) ? $_POST['alamat']:"" ?>">
	</div>
	<span><?php 
		if (isset($errors['alamat']) && count($errors['alamat']) != 0) {
			foreach ($errors['alamat'] as $key => $value) {
				echo $value.'*<br>';
			}
		} ?>
	</span>
</div>
<div class="input_box">
	<div>
		<label for="tel">No Telepon :</label>
		<input type="text" name="tel" id="tel" placeholder="masukkan nomor telepon" value="<?php echo isset($_POST['tel']) ? $_POST['tel']:"" ?>">
	</div>
	<span><?php 
		if (isset($errors['nomor']) && count($errors['nomor']) != 0) {
			foreach ($errors['nomor'] as $key => $value) {
				echo $value.'*<br>';
			}
		} ?>
	</span>
</div>
<div class="input_box">
	<div>
		<label for="bb">Berat badan :</label>
		<input type="text" name="bb" id="bb" placeholder="masukkan dalam satuan kg" value="<?php echo isset($_POST['bb']) ? $_POST['bb']:"" ?>">
	</div>
	<span><?php 
		if (isset($errors['bb']) && count($errors['bb']) != 0) {
			foreach ($errors['bb'] as $key => $value) {
				echo $value.'*<br>';
			}
		} ?>
	</span>
</div>
<div class="input_box">
	<div>
		<label for="tb">Tinggi badan :</label>
		<input type="text" name="tb" id="tb" placeholder="masukkan dalam satuan cm" value="<?php echo isset($_POST['tb']) ? $_POST['tb']:"" ?>">
	</div>
	<span><?php 
		if (isset($errors['tb']) && count($errors['tb']) != 0) {
			foreach ($errors['tb'] as $key => $value) {
				echo $value.'*<br>';
			}
		} ?>
	</span>
</div>
<div class="input_box">
	<div>
		<label for="suhu">Suhu tubuh :</label>
		<input type="text" name="suhu" id="suhu" placeholder ="masukkan dalam satuan celcius" value="<?php echo isset($_POST['suhu']) ? $_POST['suhu']:"" ?>">
	</div>
	<span><?php 
		if (isset($errors['suhu']) && count($errors['suhu']) != 0) {
			foreach ($errors['suhu'] as $key => $value) {
				echo $value.'*<br>';
			}
		} ?>
	</span>
</div>
<div class="input_box">
	<div>
		<button type="submit" name="submit">Submit</button>
	</div>
</div>