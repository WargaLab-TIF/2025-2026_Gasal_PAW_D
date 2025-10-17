<?php 
function requiredCheck($filde){
	$filde = trim($filde);
	return empty($filde);
}
function min1Digit($filde){
	return preg_match('/[\d]+/', $filde);
}

function valNik($filde, &$errors){
	if (requiredCheck($filde)) {
		$errors['nik'] = 'Kolom NIK Wajib Di Isi';
	}elseif (!preg_match('/^\d{16}$/', $filde)) {
		$errors ['nik'] = 'Kolom NIK Harus Berisi Numerik 16 Digit';
	}
}

function valNama($filde, &$errors){
	if (requiredCheck($filde)) {
		$errors['nama'] = 'Kolom Nama Wajib Di Isi';
	}elseif (!preg_match('/^[a-zA-Z\s]+$/', $filde)) {
		$errors ['nama'] = 'Kolom Nama Hanya Boleh Alfabet';
	}
}

function valUmur($filde, &$errors){
	if (requiredCheck($filde)) {
		$errors['umur'] = 'Kolom Umur Wajib Di Isi';
	} elseif (!preg_match('/^(1[7-9]|[2-9][0-9]|100)$/',$filde)){
		$errors['umur'] = 'Batas Umur Diatas 17 Tahun';
	}
}

function valIbu($filde, &$errors){
	if (requiredCheck($filde)) {
		$errors['ibu'] = 'Kolom IBU Kandung Wajib Di Isi';
	} elseif (!preg_match('/^[a-zA-Z\s]+$/',$filde)){
		$errors['ibu'] = 'Kolom IBU Kandung Hanya Boleh Alfabet';
	}
}

function valPassword($filde, &$errors){
	if (requiredCheck($filde)) {
		$errors['password'] = 'Kolom Password Wajib Di Isi';
	} elseif (!preg_match('/^[a-zA-Z\s0-9]{8,16}$/',$filde)){
		$errors['password'] = 'Kolom Password harus berisi 8–16 karakter, terdiri dari huruf dan angka. Tidak boleh menggunakan simbol.';
	}
}

 ?>
