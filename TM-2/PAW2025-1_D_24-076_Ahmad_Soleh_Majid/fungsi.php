<?php 

// untuk mengecek
function requiredCheck($field) {
	$field = trim($field);
	return empty($field);
}

function check_num_alpa($field){
  $regex = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z0-9]+$/';
  return preg_match($regex,$field);
}

function check_alpa($field){
  $regex = "/^[a-zA-Z\s]+$/";
  return preg_match($regex,$field);
}

function check_num($field){
  $regex = "/^[\d]+$/";
  return preg_match($regex,$field);
}

function len_chart($field,$len){
  $length = strlen($field);
  if($length != $len ){
    return false;
  }
  return true;
}

function min_chart($field,$len){
  $length = strlen($field);
  if($length >= $len ){
    return false;
  }
  return true;
}

function valName($field, &$erors) {
	if(requiredCheck($field)) {
		$erors["nama"][] = "Nama tidak boleh kosong";
	}elseif (!check_alpa($field)) {
		$erors["nama"][] = " Nama hanya boleh alfabet";
	}
}

function valNik($field, &$erors) {
	if(requiredCheck($field)) {
		$erors["nik"][] = "NIK tidak boleh kosong";
	}elseif (!check_num($field)) {
		$erors["nik"][] = "NIK hanya boleh digit";
	}elseif (!len_chart($field,16)){
	  $erors["nik"][] = "NIK 16 digit";
	}
}

function valUmur($field,&$erors){
  if(requiredCheck($field)) {
		$erors["umur"][] = "Umur tidak boleh kosong";
	}elseif (!check_num($field)) {
		$erors["umur"][]  = "Umur hanya boleh digit";
	}
}

function valLay($field,&$erors){
  if(requiredCheck($field)) {
		$erors["layanan"][] = "Kode Layanan tidak boleh kosong";
  }elseif (!check_num_alpa($field)){
    $erors["layanan"][] = "Kode Layanan kombinasi digit dan alpha";
  }elseif (min_chart($field,3)){
    $erors["layanan"][] = "Kode layanan Minimal 3 digit";
  }
}

function valDok($field,&$erors){
  if(requiredCheck($field)) {
		$erors["dokter"][] = "Kode Dokter tidak boleh kosong";
  }elseif (!check_num_alpa($field)){
    $erors["dokter"][] = "Kode Dokter kombinasi digit dan alpha";
  }elseif (!len_chart($field,5)){
    $erors["dokter"][] = "Kode 5 digit";
  }
}

?>