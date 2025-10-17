<?php 

function requiredCheck($field){
	$field = trim($field);
	return empty($field);
}

function minDigit($field){
	$pattern=('/[\d]{16}/');
	return($pattern);
}

function angka($field){
	$pattern="/^[\d]+$/";
	return($pattern);
}

function panggilan(){
	return '/^[a-zA-Z\s]{1,12}$/';
}

function alfabet($field){
	$pattern=('/^[a-zA-Z\s]$/');
	return($pattern);
}




function valNama($field,&$errors){
	if(requiredCheck($field)){
		$errors['nama'] = "Kolom Nama wajib di isi";
	}elseif (!preg_match('/^[a-zA-Z\s]+$/',$field)) {
		$errors['nama'] = "nama hanya boleh alfabet";
	}
}

function valIbu($field,&$errors){
	if(requiredCheck($field)){
		$errors['ibu'] = "Kolom Nama Ibu wajib di isi";
	}elseif (!preg_match('/^[a-zA-Z\s]+$/',$field)) {
		$errors['ibu'] = "nama ibu hanya boleh alfabet";
	}

}

function valNIK($field,&$errors){
	if (requiredCheck($field)) {
		$errors['nik'] = "kolom NIK wajib diisi";
	}elseif (preg_match(angka($field),$field)){
		if(!preg_match(minDigit($field),$field)){
			$errors['nik'] = "NIK harus 16 digit";
		}
	}else{
		$errors['nik'] = "NIK harus berupa angka";
	}
}

function valpw($field, &$errors){
	if (requiredCheck($field)) {
		$errors['pw'] = "kolom Password wajib diisi";
	}elseif (!preg_match('/^[a-zA-Z0-9\s]{8,}$/',$field)){
		$errors['pw'] = "kolom Password paling tidak 8 huruf atau angka";
	}

}


function valPin($field,&$errors){
	if (requiredCheck($field)) {
		$errors['pin'] = "kolom PIN wajib diisi";
	}elseif (preg_match(angka($field),$field)){
		if(!preg_match('/[\d]{6}/',$field)){
			$errors['pin'] = "PIN harus 6 digit";
		}
	}else{
		$errors['pin'] = "PIN harus berupa angka";
	}
}

function valUser($field, &$errors) {
    if (requiredCheck($field)) {
        $errors['user'] = "Kolom Nama panggilan wajib diisi";
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $field)) {
        $errors['user'] = "Nama panggilan hanya boleh berisi huruf dan spasi";
    } elseif (!preg_match(panggilan(), $field)) {
        $errors['user'] = "Kolom Nama panggilan maksimal 12 huruf";
    }
}

 ?>