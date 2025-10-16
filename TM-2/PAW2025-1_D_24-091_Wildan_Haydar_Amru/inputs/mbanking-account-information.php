<!-- Input untuk registrasi akun mBanking -->
<!-- Untuk negara, saya menggunakan lokalisasi negara Indonesia -->

<!-- Username -->
<!-- Rule: Alphanumeric, using "_" (optional), using "-" (optional), no space -->
<div class="input-container username">
	<label for="username">Username</label>
	<input type="text" name="username" id="username" value="<?= $username ?? "" ?>">

	<?php if (isset($errors["username"])): ?>
		<?php showErrorMessages("username", $errors); ?>
	<?php endif; ?>
</div>

<!-- Password -->
<!--
	Rule: 
	Alphanumeric, contain at least 1 of special char (!, @, #, $, %, ^, &, *, _, +, -), 
	min 8 chars, contain at least one number,
	contain at least one uppercase & lowercase Letter,
	contain at least one number
-->
<div class="input-container">
	<label for="password">Password</label>
	<input type="password" name="password" id="password" value="<?= $password ?? "" ?>">

	<?php if (isset($errors["password"])): ?>
		<?php showErrorMessages("password", $errors); ?>
	<?php endif; ?>
</div>

<!-- Confirm Password -->
<!-- Rule: Exactly same with the password's input -->
<div class="input-container">
	<label for="confirm-password">Konfirmasi Password</label>
	<input type="password" name="confirm-password" id="confirm-password" value="<?= $confirmPassword ?? "" ?>">

	<?php if (isset($errors["confirm-password"])): ?>
		<?php showErrorMessages("confirm-password", $errors); ?>
	<?php endif; ?>
</div>

<!-- Transaction PIN -->
<!-- Rule: Numeric, exactly 6 digits -->
<div class="input-container">
	<label for="transaction-pin">PIN Transaksi</label>
	<input type="password" name="transaction-pin" id="transaction-pin" value="<?= $transactionPin ?? "" ?>">

	<?php if (isset($errors["transaction-pin"])): ?>
		<?php showErrorMessages("transaction-pin", $errors); ?>
	<?php endif; ?>
</div>

<!-- Confirm Transaction PIN -->
<!-- Rule: Exactly same with the transaction pin's input -->
<div class="input-container confirm-transaction-pin">
	<label for="confirm-transaction-pin">Konfirmasi PIN Transaksi</label>
	<input type="password" name="confirm-transaction-pin" id="confirm-transaction-pin" value="<?= $confirmTransactionPin ?? "" ?>">

	<?php if (isset($errors["confirm-transaction-pin"])): ?>
		<?php showErrorMessages("confirm-transaction-pin", $errors); ?>
	<?php endif; ?>
</div>