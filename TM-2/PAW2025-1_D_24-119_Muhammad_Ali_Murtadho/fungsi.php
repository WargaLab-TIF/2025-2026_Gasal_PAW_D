<?php 	

require 'validate.inc';
function validate($array){
	$errors = [];
	$pat_nama = "/^[a-zA-Z\s]+$/"; 
	$pat_rekening = "/^[0-9]*$/";
	$pat_NIK = "/^[\d]{16}$/";

	$pat_passwd = "/^[a-zA-Z0-9]*$/"; 
	$jumlah = "/^.{8,}/";
	// Hanya Angka
	$nama = $array['nama'];
	$rekening = $array['rekening'];
	$nik = $array['nik'];
	$Password = $array['Password'];

	validatePattern($errors, $array, 'nama', $pat_nama,'Nama Berupa Alfabet');
	validatePattern($errors, $array, 'rekening', $pat_rekening,'Nomor Rekening Angka');
	valNIK($errors,$nik);
	valPW($errors,$Password);
 	return $errors;
}




function requiredCheck($field)
{
	$field = trim($field);
	return empty($field);
}

function valNIK(&$errors,$field){
	if (requiredCheck($field)) {
		$errors['nik'] = 'kolom NIK wajib diisi';
	}
	elseif(!preg_match("/^[0-9]*$/",$field)){
		$errors['nik'] = 'Kolom NIK hanya boleh Angka';
	}elseif(!preg_match("/^.{16}$/",$field)){
		$errors['nik'] = 'Harus berjumlah 16 digit';
	}

}

function valPW(&$errors,$field){
	if (requiredCheck($field)) {
		$errors['Password'] = 'Password wajib diisi';
	}
	elseif(!preg_match("/^[a-zA-Z0-9]*$/",$field)){
		$errors['Password'] = 'Password gabungan huruf dan atau angka';
	}elseif(!preg_match("/^.{8,}$/",$field)){
		$errors['Password'] = 'Berjumlah Minimal 8 Digit';
	}
	
}
 ?>