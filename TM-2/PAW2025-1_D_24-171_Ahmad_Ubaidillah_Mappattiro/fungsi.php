<?php 
$errors = [];

function validasiSatu(&$errors ,$entitas, $atribut) {
	if (!isset($entitas[$atribut]) || empty(trim($entitas[$atribut]))) {
		$errors[$atribut] = '*Wajib Di isi';
	}
}

function validasiDua(&$errors, $entitas, $atribut) {
	$pola = "/^[ a-zA-Z'-]+$/";
	if (!preg_match($pola, $entitas[$atribut])) {
		$errors[$atribut] = '*Hanya alfabet yang diperbolehkan';
	}
}

function validasiTiga(&$errors, $entitas, $atribut) {
	$pola = "/^[0-9]+$/";
	if (!preg_match($pola, $entitas[$atribut])) {
		$errors[$atribut] = '*Hanya Menerima Angka';
	}
}

function validasiEmpat(&$errors, $entitas, $atribut) {
	$pola = "/^[a-zA-Z0-9]+$/";
	if (!preg_match($pola, $entitas[$atribut])) {
		$errors[$atribut] = '*Hanya boleh huruf dan angka';
	}
}

function validasiLima(&$errors, $entitas, $atribut) {
	if (strlen($entitas[$atribut]) != 16 ) {
		$errors[$atribut] = '*Harus 16 Digit';
	}
}

function validasiEnam(&$errors, $entitas, $atribut) {
	if (strlen($entitas[$atribut]) <= 4 ) {
		$errors[$atribut] = '*Karakter harus lebih dari 4';
	}
}


//--FUNGSI PENGHUBUNG--
function cekNamaLengkap(&$errors, $entitas, $atribut) {
	validasiSatu($errors, $entitas, $atribut);

	if (!isset($errors[$atribut])) {
		validasiDua($errors, $entitas, $atribut);
	}
}

function cekUsername(&$errors, $entitas, $atribut) {
	validasiSatu($errors, $entitas, $atribut);

	if (!isset($errors[$atribut])) {
		validasiEmpat($errors, $entitas, $atribut);
		if (!isset($errors[$atribut])) {
			validasiEnam($errors, $entitas, $atribut);
		}
	}
}

function cekKTP(&$errors, $entitas, $atribut) {
	validasiSatu($errors, $entitas, $atribut);

	if(!isset($errors[$atribut])) {
		validasiTiga($errors, $entitas, $atribut);
		if(!isset($errors[$atribut])) {
			validasiLima($errors, $entitas, $atribut);
		}
	} 
}

function cekAlamat(&$errors, $entitas, $atribut) {
	validasiSatu($errors, $entitas, $atribut);

}

function cekNomor(&$errors, $entitas, $atribut) {
	validasiSatu($errors, $entitas, $atribut);

	if(!isset($errors[$atribut])) {
		validasiTiga($errors, $entitas, $atribut);

		if(!isset($errors[$atribut])){
			if (strlen($entitas[$atribut]) <= 9) {
				$errors[$atribut] = '*Digit nomor seluler kurang';
			}
		}
	}
}

function cekNamaibu(&$errors, $entitas, $atribut) {
	validasiSatu($errors, $entitas, $atribut);

	if (!isset($errors[$atribut])) {
		validasiDua($errors, $entitas, $atribut);
	}
}

function cekJenis(&$errors, $entitas, $atribut) {
	validasiSatu($errors, $entitas, $atribut);
}


function cekSetoran(&$errors, $entitas, $atribut) {
	validasiSatu($errors, $entitas, $atribut);

	if(!isset($errors[$atribut])) {
		validasiTiga($errors, $entitas, $atribut);

		if (!isset($errors[$atribut])) {
			if (strlen($entitas[$atribut]) <= 4){
				$errors[$atribut] = '*Setoran awal harus 5 digit (Ratusan Ribu)';
			}
		}
	}
}
 



 ?>
