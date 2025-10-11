<?php 

if (isset($_POST['submit'])) {
	$nama = $_POST['Nama_Panggilan'] ?? "";
	$errNama = cekNama($nama);
	// echo "$nama";

	$telp = $_POST['No_Telp'] ?? "";
	$errTelp = cekTelp($telp);
	// echo "$telp";

	$akun = $_POST['Nama_Akun'] ?? "";
	$errAkun = cekAkun($akun);
	// echo "$akun";
	
	$nik = $_POST['NIK'] ?? "";
	$errNIK = cekNIK($nik);
	// echo "$nik";

	$pw = $_POST['Password'] ?? "";
	$errPw = cekPw($pw);
	// echo "$pw";

	if (cekAll($errNama, $errTelp, $errAkun, $errNIK, $errPw)) {
        $sukses =  "Selamat $nama ! <br> kamu sudah menjadi Nasabah di Bank ini !";
	}
}

function cekNama($nama) {
    $errNama = "";
    if ($nama == "") {
        $errNama = "*field ini tidak boleh kosong";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $nama)) {
        $errNama = "*field ini hanya menerima alfabet";
    }
    return $errNama;
}

function cekTelp($telp) {
    $errTelp = "";
    if ($telp == "") {
        $errTelp = "*field ini tidak boleh kosong";
    } elseif (!preg_match("/^[0-9]+$/", $telp)) {
        $errTelp = "*field ini hanya menerima numerik";
    }
    return $errTelp;
}

function cekAkun($akun) {
    $errAkun = "";
    if ($akun == "") {
        $errAkun = "*field ini tidak boleh kosong";
    } elseif (!preg_match("/^[a-zA-Z0-9]+$/", $akun)) {
        $errAkun = "*field ini hanya menerima alfanumerik";
    }
    return $errAkun;
}

function cekNIK($nik) {
    $errNIK = "";
    if ($nik == "") {
        $errNIK = "*field ini tidak boleh kosong";
    } elseif (!preg_match("/^[0-9]{16}$/", $nik)) {
        $errNIK = "*field ini hanya menerima NIK Indonesia (16 digit)";
    }
    return $errNIK;
}

function cekPw($pw) {
    $errPw = "";
    if ($pw == "") {
        $errPw = "*field ini tidak boleh kosong";
    } elseif (!preg_match("/^[a-zA-Z0-9]{8}$/", $pw)) {
        $errPw = "*password harus tepat 8 karakter dan hanya alfanumerik";
    }
    return $errPw;
}

function cekAll($errNama, $errTelp, $errAkun, $errNIK, $errPw) {
    if ($errNama == "" && $errTelp == "" && $errAkun == "" && $errNIK == "" && $errPw == "") {
        return true;
    } else {
        return false;
    }
}

?>