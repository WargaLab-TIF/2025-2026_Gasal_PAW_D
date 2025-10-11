<?php 

function requiredCek($field) {
	$field = trim($field);
	return empty($field);
}

// fungsi validasi nama
function valid_nama($field, &$errors) {
	if (requiredCek($field)) {
		$errors['nama'] = 'Nama tidak boleh kosong.';
	} elseif (!preg_match('/^[a-zA-Z\s]+$/', $field) && strlen($field) < 3) {
		$errors['nama'] = 'Nama minimal 3 huruf, dan harus alfabet.';
	} elseif (!preg_match('/^[a-zA-Z\s]+$/', $field)) {
		$errors['nama'] = 'Nama hanya diperbolehkan huruf.';
	} elseif (strlen($field) < 3) {
		$errors['nama'] = 'Nama minimal 3 huruf.';
	} 
}

// fungsi validasi NIK
function valid_nik($field, &$errors) {
	if (requiredCek($field)) {
		$errors['nik'][] = 'NIK tidak boleh kosong.';
		return;
	}

	if (!preg_match('/^[0-9]+$/', $field) && strlen($field) != 16) {
		$errors['nik'][] = 'NIK harus angka dan panjang harus 16 digit.';
	}

	if (!preg_match('/^[0-9]+$/', $field) && strlen($field) == 16) {
		$errors['nik'][] = 'NIK hanya boleh angka.';
	}

	if (preg_match('/^[0-9]+$/', $field) && strlen($field) != 16) {
		$errors['nik'][] = 'Panjang NIK harus 16 digit.';
	}
}

// fungsi validasi password
function valid_pass($field, &$errors) {
	if (requiredCek($field)) {
		$errors['password'][] = 'Password tidak boleh kosong.';
		return;
	}

	$regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/';

	if (preg_match($regex, $field) && strlen($field) < 8) {
		 $errors['password'][] = 'Password harus ada kombinasi huruf besar, kecil, angka, karakter dan panjang minimal 8.';
	} elseif (strlen($field) < 8) {
		$errors['password'][] = 'Panjang password minimal 8';
	} elseif (!preg_match($regex, $field) && strlen($field) >= 8) {
		 $errors['password'][] = 'Password harus ada kombinasi huruf besar, kecil, angka, dan karakter.';
	}
}

// fungsi validasi nomor telpon
function valid_telp($field, &$errors) {
	if (requiredCek($field)) {
		$errors['telpon'][] = 'Nomor telpon tidak boleh kosong.';
		return;
	}

	if (!preg_match('/^[0-9]+$/', $field) && (strlen($field) < 11 || strlen($field) > 13)) {
		$errors['telpon'][] = 'Panjang nomor telpon 11 - 13 digit dan harus angka.';
	} elseif (!preg_match('/^[0-9]+$/', $field)) {
		$errors['telpon'][] = 'Nomor telpon harus angka.';
	} elseif (preg_match('/^[0-9]+$/', $field) && (strlen($field) < 11 || strlen($field) > 13)) {
		$errors['telpon'][] = 'Panjang nomor telpon harus 11 - 13 digit.';
	}
}

 ?>