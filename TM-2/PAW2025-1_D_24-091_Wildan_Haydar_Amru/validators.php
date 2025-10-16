<?php
// reusable validator
function isFieldEmpty(string $field) {
	$field = trim($field);

	return !$field ? true : false;
}

function isAlphaNumeric(string $field) {
	$regex = "/^[A-Za-z0-9 ]+$/";

	return preg_match($regex, $field);
}

function isNumeric(string $field) {
	$regex = "/^\d+$/";

	return preg_match($regex, $field);
}

function isAlphabet(string $field) {
	$regex = "/^[A-Za-z ]+$/";

	return preg_match($regex, $field);
}

// specific field validator
function bankAccountNumberVal(string $field, &$errors): void {
	$regex = "/^\d{16,16}$/";

	if (isFieldEmpty($field)) {
		$errors["bank-account-number"][] = "Nomor rekening tidak boleh kosong";
	}

	if (!isNumeric($field)) {
		$errors["bank-account-number"][] = "Nomor rekening harus bernilai numerik";
	}

	if (!preg_match($regex, $field)) {
		$errors["bank-account-number"][] = "Panjang nomor rekening harus 16 digit";
	}
}

function fullnameVal(string $field, &$errors): void {
	$regex = "/^[A-Za-z' ']{3,}$/";

	if (isFieldEmpty($field)) {
		$errors["fullname"][] = "Nama lengkap tidak boleh kosong";
	}

	if (!isAlphabet($field)) {
		$errors["fullname"][] = "Setiap karakter nama lengkap harus bernilai alphabet";
	}

	if (!preg_match($regex, $field)) {
		$errors["fullname"][] = "Panjang nama lengkap minimal adalah 3 karakter";
	}
}

function dateOfBirthVal(string $field, &$errors): void {
	$regex = "/^\d{1,2}$/";

	if (isFieldEmpty($field)) {
		$errors["date-of-birth"][] = "Tanggal lahir tidak boleh kosong";
	}

	if (!isNumeric($field)) {
		$errors["date-of-birth"][] = "Tanggal lahir harus bernilai numerik";
	}

	if (!preg_match($regex, $field)) {
		$errors["date-of-birth"][] = "Jumlah digit minimal adalah 1 digit, dan maksimal adalah 2 digit";
	}
}

function monthOfBirthVal(string $field, &$errors) {
	$regex = "/^\d{1,2}$/";

	if (isFieldEmpty($field)) {
		$errors["month-of-birth"][] = "Bulan lahir tidak boleh kosong";
	}

	if (!isNumeric($field)) {
		$errors["month-of-birth"][] = "Bulan lahir harus bernilai numerik";
	}

	if (!preg_match($regex, $field)) {
		$errors["month-of-birth"][] = "Jumlah digit minimal adalah 1 digit, dan maksimal adalah 2 digit";
	}
}

function yearOfBirthVal(string $field, &$errors) {
	$regex = "/^\d{4,4}$/";

		if (isFieldEmpty($field)) {
		$errors["year-of-birth"][] = "Tahun lahir tidak boleh kosong";
	}

	if (!isNumeric($field)) {
		$errors["year-of-birth"][] = "Tahun lahir harus bernilai numerik";
	}

	if (!preg_match($regex, $field)) {
		$errors["year-of-birth"][] = "Jumlah digit tahun harus persis 4 digit";
	}
}


function idNumberVal(string $field, &$errors) {
	$regex = "/^\d{16,16}$/";

	if (isFieldEmpty($field)) {
		$errors["id-number"][] = "NIK tidak boleh kosong";
	}

	if (!isNumeric($field)) {
		$errors["id-number"][] = "NIK harus bernilai numerik";
	}

	if (!preg_match($regex, $field)) {
		$errors["id-number"][] = "Jumlah digit NIK harus persis 16 digit";
	}
}

function emailVal(string $field, &$errors) {
	if (!filter_var($field, FILTER_VALIDATE_EMAIL)) {
		$errors["email"][] = "Email tidak valid";
	}
}

function usernameVal(string $field, &$errors) {
	$reSpecialChar = "/[_@$*-]{0,}/";

	if (isFieldEmpty($field)) {
		$errors["username"][] = "Username tidak boleh kosong";
	}

	if (!isAlphaNumeric($field)) {
		$errors["username"][] = "Setiap karakter username harus bernilai alphanumeric";
	}

	if (!preg_match_all($reSpecialChar, $field)) {
		$errors["username"][] = "Karakter spesial yang diizinkan hanyalah '/', '_'. '@', '$', '*', '-'";
	}

	if (strlen($field) < 4) {
		$errors["username"][] = "Panjang username harus diatas 4 karakter";
	}
}

function passwordVal(string $field, &$errors) {
	if (isFieldEmpty($field)) {
		$errors["password"][] = "Password tidak boleh kosong";
	}

	if (!isAlphaNumeric($field)) {
		$errors["password"][] = "Setiap karakter password harus bernilai alphanumeric";
	}

	if (strlen($field) < 7) {
		$errors["password"][] = "Password harus memiliki panjang minimal sebanyak 8 karakter";
	}
}

function confirmPasswordVal(string $field, string $password, &$errors) {
	if (isFieldEmpty($field)) {
		$errors["confirm-password"][] = "Konfirmasi password tidak boleh kosong";
	}

	if ($field !== $password) {
		$errors["confirm-password"][] = "Masukan harus sama persis dengan password";
	}
}

function transactionPinVal(string $field, &$errors) {
	$reTransPin = "/^\d{6,6}$/";

	if (isFieldEmpty($field)) {
		$errors["transaction-pin"][] = "Pin transaksi tidak boleh kosong";
	}

	if (!isNumeric($field)) {
		$errors["transaction-pin"][] = "Pin transaksi harus bernilai numerik";
	}

	if (!preg_match($reTransPin, $field)) {
		$errors["transaction-pin"][] = "Panjang pin harus persis sebanyak 6 digit";
	}
}

function confirmTransactionPinVal(string $field, string $transPin, &$errors) {
	if (isFieldEmpty($field)) {
		$errors["confirm-transaction-pin"][] = "Konfirmasi pin tidak boleh kosong";
	}

	if ($field !== $transPin) {
		$errors["confirm-transaction-pin"][] = "Masukan harus sama persis dengan pin transaksi";
	}
}
?>