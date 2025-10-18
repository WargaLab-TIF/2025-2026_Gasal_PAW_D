<?php 

function requiredCheck($field) {
	$field = trim($field);
	return empty($field);
}

function valName($field, &$erors) {
	$ptNamaLengkap = "/^[a-zA-z\s]+$/";
	if(requiredCheck($field)) {
		$erors["nama"] = "Kolom nama lengkap wajib di isi";
	} elseif (!preg_match($ptNamaLengkap, $field)) {
		$erors["nama"] = "Kolom nama lengkap hanya boleh alfabet";
	}
}

function valUmur($field, &$erors) {
	$ptUmurNumeric = "/^[0-9]+$/";
	$ptUmurRange = "/^(6|1[0-8])+$/";
	if(requiredCheck($field)) {
		$erors["umur"] = "Kolom umur wajib di isi";
	} elseif (!preg_match($ptUmurNumeric, $field)) {
		$erors["umur"] = "Kolom umur hanya boleh digit";
	} elseif (!preg_match($ptUmurRange, $field)) {
		$erors["umur"] = "Kolom umur harus berusia 6 - 18";	
	}
}

function valNamaIbu($field, &$erors) {
	$ptNamaIbu = "/^[a-zA-z\s]+$/";
	if(requiredCheck($field)) {
		$erors["nama_ibu"] = "Kolom nama ibu wajib di isi";
	} elseif (!preg_match($ptNamaIbu, $field)) {
		$erors["nama_ibu"] = "Kolom nama ibu hanya boleh alfabet";
	}
}

function valNik($field, &$erors) {
	$ptNikAlf = "/^[a-zA-Z]+$/";
	$ptNikDig = "/^[0-9]{16}+$/";
	if(requiredCheck($field)) {
		$erors["nik"] = "Kolom nik wajib di isi";
	} elseif (preg_match($ptNikAlf, $field)) {
		$erors["nik"] = "Kolom nik hanya boleh digit";
	}elseif (!preg_match($ptNikDig, $field)) {
		$erors["nik"] = "Kolom nik harus 16 digit !kurang/lebih";
	}
}

function valPassword($field, &$erors) {
	$ptPasswordAlfaN = "/^[a-zA-Z0-9]{8,}+$/";
	if(requiredCheck($field)) {
		$erors["password"] = "Kolom password wajib di isi";
	} elseif (!preg_match($ptPasswordAlfaN, $field)) {
		$erors["password"] = "Kolom password harus minimal 8 char dan tidak boleh ada simbol";
	}
}
?>