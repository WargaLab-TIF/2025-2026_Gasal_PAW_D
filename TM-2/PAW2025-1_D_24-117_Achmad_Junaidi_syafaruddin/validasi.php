<?php 
function requiredCheck($field){
	$field = trim($field);
	return empty($field);
}

function nik($field,&$eror){
	if(requiredCheck($field)){
		$eror['nik'] = 'NIK wajib di isi';
	}elseif(!preg_match('/^[0-9]{16}+$/',$field)){
		$eror['nik'] = 'NIK tidak valid, harus angka dan harus 16 digit';
	}
}

function valNama($field,&$eror){
	if (requiredCheck($field)) {
		$eror['nama'] = 'Kolom Nama Wajib Diisi';
	}elseif (!preg_match('/^[a-zA-Z\s]+$/', $field)) {
		$eror['nama'] = 'Kolom nama hanya boleh alfabet';
	}
}

function no_tlp($field, &$eror){
	if (requiredCheck($field)) {
		$eror['no'] = 'Kolom no tlp wajib di isi';
	}elseif (!preg_match('/^[\d]{12}+$/',$field)) {
		$eror['no'] = "kolom no tlp hanya boleh angka dan harus 12 digit";	}
}

function pass($field,&$eror){
	if(requiredCheck($field)){
		$eror['password'] = 'Kolom password harus di isi';
	}elseif(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/',$field)){
		$eror['password'] = 'Kolom password kombinasi alfabet dan numerik minimal 8 digit';
	}
}

function pin($field,&$eror){
	if(requiredCheck($field)){
		$eror['pin'] = 'pin wajib di isi';
	}elseif(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/',$field)){
		$eror['pin'] = 'pin wajib kombinasi alfabet dan numerik dengan panjang minimal 6 karakter';
	}
}

?>