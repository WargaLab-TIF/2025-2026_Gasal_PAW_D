<div class="form">
	<div class="input_konten">
		<div class="input">
			<label for="nama">Nama Lengkap</label>
			<input type="text" name="nama" id="nama" value="<?= $nama ?? '' ?>">
		</div>
		<span class='errors'><?= $errors['nama'] ?? '' ?></span>
	</div>

	<div class="input_konten">
		<div class="input">
			<label for="nik">Nomor Induk Kependudukan (NIK)</label>
			<input type="text" name="nik" id="nik" value="<?= $nik ?? '' ?>">
		</div>

		<?php if (!empty($errors['nik'])): ?>
			<?php foreach ($errors['nik'] as $err): ?>
				<span class='errors'><?= $err ?? '' ?></span>
			<?php endforeach; ?>
		<?php endif; ?>

	</div>

	<div class="input_konten">
		<div class="input">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" value="<?= $password ?? '' ?>">
		</div>

		<?php if (!empty($errors['password'])): ?>
			<?php foreach ($errors['password'] as $err): ?>
				<span class='errors'><?= $err ?? '' ?></span>
			<?php endforeach; ?>
		<?php endif; ?>

	</div>

	<div class="input_konten">
		<div class="input">
			<label for="telpon">Nomor Telpon</label>
			<input type="text" name="telpon" id="telpon" value="<?= $telpon ?? '' ?>">
		</div>

		<?php if (!empty($errors['telpon'])): ?>
			<?php foreach ($errors['telpon'] as $err): ?>
				<span class='errors'><?= $err ?? '' ?></span>
			<?php endforeach; ?>
		<?php endif; ?>

	</div>

	<div class="input">
		<button type="submit" name="submit" value="submit">Submit</button>
	</div>
</div>