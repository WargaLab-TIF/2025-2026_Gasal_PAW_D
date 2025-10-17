<form method="POST">
	<h3>REGISTER</h3><hr>

	<label for="nama">Nama Lengkap :</label><br>
	<input type="text" id="nama" name="nama" value="<?php if(isset($_POST['nama'])) echo
	htmlspecialchars($_POST['nama'])?>">
	<?php
	if (isset($errors['nama'])) {
		echo "<span class='erorr'>{$errors['nama']}</span>";
	}
	?><br>

	<label for="username">Username Pengguna :</label><br>
	<input type="text" id="username" name="username" value="<?php if(isset($_POST['username'])) echo
	htmlspecialchars($_POST['username'])?>">
	<?php
	if (isset($errors['username'])) {
		echo "<span class='erorr'>{$errors['username']}</span>";
	}
	?><br>

	<label for="ktp">Nomor KTP :</label><br>
	<input type="text" id="ktp" name="ktp" value="<?php if(isset($_POST['ktp'])) echo
	htmlspecialchars($_POST['ktp'])?>">
	<?php
	if (isset($errors['ktp'])) {
		echo "<span class='erorr'>{$errors['ktp']}</span>";
	}
	?><br>

	<label for="alamat">Alamat :</label><br>
	<input type="text" id="alamat" name="alamat" value="<?php if(isset($_POST['alamat'])) echo
	htmlspecialchars($_POST['alamat'])?>">
	<?php
	if (isset($errors['alamat'])) {
		echo "<span class='erorr'>{$errors['alamat']}</span>";
	}
	?><br>

	<label for="nomor">Nomor Telephone :</label><br>
	<input type="text" id="nomor" name="nomor" value="<?php if(isset($_POST['nomor'])) echo
	htmlspecialchars($_POST['nomor'])?>">
	<?php
	if (isset($errors['nomor'])) {
		echo "<span class='erorr'>{$errors['nomor']}</span>";
	}
	?><br>

	<label for="ibu">Nama Ibu Kandung :</label><br>
	<input type="text" id="ibu" name="ibu" value="<?php if(isset($_POST['ibu'])) echo
	htmlspecialchars($_POST['ibu'])?>">
	<?php
	if (isset($errors['ibu'])) {
		echo "<span class='erorr'>{$errors['ibu']}</span>";
	}
	?><br>

	<label for="jenis">Jenis Rekening :</label><br>
	<select id="jenis" name="jenis">
	<option value="">-- Pilih Jenis Rekening --</option>
	<option value="tabungan" <?php if (($_POST['jenis'] ?? '') == 'tabungan') echo 'selected'; ?>>Tabungan</option>
	<option value="Giro" <?php if (($_POST['jenis'] ?? '') == 'Giro') echo 'selected'; ?>>Giro</option>
</select>
<?php
	if (isset($errors['jenis'])) {
		echo "<span class='erorr'>{$errors['jenis']}</span>";
	}
?><br>

<label for="setoran">Setoran Awal (Rp) :</label><br>
<input type="text" id="setoran" name="setoran" placeholder="Example : 100000" value="<?php if(isset($_POST['setoran'])) echo
htmlspecialchars($_POST['setoran'])?>">
<?php
if (isset($errors['setoran'])) {
	echo "<span class='erorr'>{$errors['setoran']}</span>";
}
?>


<hr><br>

<button type="submit">Submit</button>
</form>