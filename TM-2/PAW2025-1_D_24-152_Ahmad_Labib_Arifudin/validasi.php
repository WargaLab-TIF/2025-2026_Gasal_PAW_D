<?php 
function kosong($field){
	$field=trim($field);
	return empty($field);
}
function numerik($field){
	return preg_match('/^[0-9]+$/', $field);
}
function alfanumerik($field){
	return preg_match('/^[a-zA-Z0-9\s]+$/', $field);
}
function valnama($field,&$errors){
	if (kosong($field)) {
		$errors['nama'][]='nama harus diisi';
	}else{
		if (!preg_match('/^[a-zA-Z\s`]{1,100}$/',$field)) {
		$errors['nama'][]='nama harus alfabet dan tidak boleh lebih 100 karakter';
		}
	}

}
function valgender($field,&$errors){
	if ( kosong($field)) {
		$errors['gender'][]='wajib diisi';
	}
}
function valumur($field,&$errors){
	if (kosong($field)) {
		$errors['umur'][]='umur wajib diisi';
	}elseif (!numerik($field)) {
			$errors['umur'][]='umur harus numerik';
		
	}
}
function valalamat($field,&$errors){
	if (kosong($field)){
		$errors['alamat'][]='alamat wajib di isi';
	}elseif (!alfanumerik($field)) {
		$errors['alamat'][]='alamat harus alfanumerik';
	}
}
function valnomor($field,&$errors){
	if (kosong($field)) {
		$errors['nomor'][]='nomor wajib diisi';
	}elseif (!preg_match('/^\d{12,13}$/', $field)) {
		$errors['nomor'][]='jumlah digit no telepon kurang atau lebih';
	}
}
function valtb($field,&$errors){
	if (kosong($field)) {
		$errors['tb'][]='wajib diisi';
	}elseif (!numerik($field)) {
		$errors['tb'][]='harus numerik';
	}
}
function valbb($field,&$errors){
	if (kosong($field)) {
		$errors['bb'][]='wajib diisi';
	}elseif (!numerik($field)) {
		$errors['bb'][]="harus numerik";
	}
}
function valsuhu($field,&$errors){
	if (kosong($field)) {
		$errors['suhu'][]='wajib diisi';
	}elseif (!numerik($field)) {
		$errors['suhu'][]='harusnumerik';
	}
}


 ?>
