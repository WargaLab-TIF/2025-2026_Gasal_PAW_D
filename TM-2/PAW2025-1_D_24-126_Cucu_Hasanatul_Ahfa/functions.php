<?php
function validasiForm($data) {
    $errors = [];

    if (trim($data['nama']) === '') {
        $errors['nama'] = " Nama wajib diisi.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $data['nama'])) {
        $errors['nama'] = "Nama hanya boleh berisi huruf.";
    } elseif (strlen($data['nama']) > 30) {
        $errors['nama'] = "Nama maksimal 30 karakter.";
    }

    if (trim($data['usia']) === '') {
        $errors['usia'] = "Usia wajib diisi.";
    } elseif (!preg_match("/^[0-9]+$/", $data['usia'])) {
        $errors['usia'] = "Usia harus berupa angka.";
    } elseif (strlen($data['usia']) > 2) {
        $errors['usia'] = "Usia maksimal 2 digit.";
    }

    if (trim($data['alamat']) === '') {
        $errors['alamat'] = " Alamat wajib diisi.";
    }

    if (trim($data['no_rm']) === '') {
        $errors['no_rm'] = " Nomor Rekam Medis wajib diisi.";
    } elseif (!preg_match("/^[a-zA-Z0-9]+$/", $data['no_rm'])) {
        $errors['no_rm'] = "Nomor Rekam Medis harus berupa kombinasi huruf dan angka.";
    }

    if (trim($data['keluhan']) === '') {
        $errors['keluhan'] = " Keluhan wajib diisi.";
    }

    return $errors;
}
?>
