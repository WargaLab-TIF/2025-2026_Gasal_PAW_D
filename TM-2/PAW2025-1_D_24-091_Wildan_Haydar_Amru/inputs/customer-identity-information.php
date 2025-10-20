<!-- Input mengenai identitas nasabah -->
<!-- Untuk negara, saya menggunakan lokalisasi negara Indonesia -->

<!-- Bank Account Number -->
<!-- Rule: Numeric & exactly 16 Digits (every bank has different digit, I choose 16 like BTN) -->
<div class="input-container">
	<label for="bank-account-number">Nomor Rekening</label>
	<input type="text" name="bank-account-number" id="bank-account-number" value="<?= $bankAccountNumber ?? "" ?>">

	<?php if (isset($errors["bank-account-number"])): ?>
		<?php showErrorMessages("bank-account-number", $errors); ?>
	<?php endif; ?>
</div>

<!-- Fullname -->
<!-- Rule: Alphabet, minimum 3 chars -->
<div class="input-container">
	<label for="fullname">Nama Lengkap</label>
	<input type="text" name="fullname" id="fullname" value="<?= $fullname ?? "" ?>">

	<?php if (isset($errors["fullname"])): ?>
		<?php showErrorMessages("fullname", $errors); ?>
	<?php endif; ?>
</div>

<!-- Birth Date -->
<div class="birth-date-input-container">
	<!-- Rule: Numeric, minimum 1 digit, maximum 2 digits | min value = 1, max value = 31 -->
	<div class="input-container">
		<label for="date-of-birth">Tanggal Lahir</label>
		<input type="text" name="date-of-birth" id="date-of-birth" value="<?= $dateOfBirth ?? "" ?>">

	<?php if (isset($errors["date-of-birth"])): ?>
		<?php showErrorMessages("date-of-birth", $errors); ?>
	<?php endif; ?>
	</div>

	<!-- Rule: Numeric, minimum 1 digit, maximum 2 digits | min value = 1, max value = 12 -->
	<div class="input-container">
		<label for="month-of-birth">Bulan Lahir</label>
		<input type="text" name="month-of-birth" id="month-of-birth" value="<?= $monthOfBirth ?? "" ?>">

		<?php if (isset($errors["month-of-birth"])): ?>
			<?php showErrorMessages("month-of-birth", $errors); ?>
		<?php endif; ?>
	</div>

	<!-- Rule: Numeric, exactly 4 digits, min value = 100 years ago (rejected), max value = 17 years ago (rejected) -->
	<div class="input-container">
		<label for="year-of-birth">Tahun Lahir</label>
		<input type="text" name="year-of-birth" id="year-of-birth" value="<?= $yearOfBirth ?? "" ?>">

		<?php if (isset($errors["year-of-birth"])): ?>
			<?php showErrorMessages("year-of-birth", $errors); ?>
		<?php endif; ?>
	</div>
</div>

<!-- ID Number -->
<!-- Rule: Numeric, exactly 16 digits (Indonesia) -->
<div class="input-container">
	<label for="id-number">NIK</label>
	<input type="text" name="id-number" id="id-number" value="<?= $idNumber ?? "" ?>">

	<?php if (isset($errors["id-number"])): ?>
		<?php showErrorMessages("id-number", $errors); ?>
	<?php endif; ?>
</div>

<!-- Email (I use email for the OTP [in case it'll be asked]) -->
<!-- Rule: Left section is Alphanumeric, middle section must be "@", and right section is the domain format (domain name, dot (.), domain) -->
<div class="input-container">
	<label for="email">Email</label>
	<input type="text" name="email" id="email" value="<?= $email ?? "" ?>">

	<?php if (isset($errors["email"])): ?>
		<?php showErrorMessages("email", $errors); ?>
	<?php endif; ?>
</div>