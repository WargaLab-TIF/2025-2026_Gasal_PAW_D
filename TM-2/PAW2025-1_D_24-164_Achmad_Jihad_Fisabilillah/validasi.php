<?php
function requiredCheck($field){
    return trim($field) === "";
}

function valNama($field, &$eror){
    if (requiredCheck($field)) {
        $eror['namaPasien'] = "Nama pasien wajib diisi";
    } elseif (!preg_match('/^[a-zA-Z ]+$/', $field)) {
        $eror['namaPasien'] = "Nama hanya boleh huruf dan spasi";
    }
}

function valKeluhan($field, &$eror){
    if (requiredCheck($field)) {
        $eror['keluhanPasien'] = "Keluhan wajib diisi";
    }
    elseif (!preg_match('/^[A-Za-z0-9 ]+$/', $field)) {
        $eror['keluhanPasien'] = "Keluhan hanya boleh huruf, angka, dan spasi";
    } 
}

function valUsia($field, &$eror){
    if (requiredCheck($field)) {
        $eror['usiaPasien'] = "Usia wajib diisi";
    } elseif (!preg_match('/^[0-9]+$/', $field)) {
        $eror['usiaPasien'] = "Usia harus angka";
    } elseif ($field < 0 || $field > 120) {
        $eror['usiaPasien'] = "Usia harus antara 0–120 tahun";
    }
}

function valTelepon($field, &$eror){
    if (requiredCheck($field)) {
        $eror['nomorTelepon'] = "Nomor telepon wajib diisi";
    } elseif (!preg_match('/^[0-9]+$/', $field)) {
        $eror['nomorTelepon'] = "Nomor telepon harus angka";
    } elseif (!preg_match('/^[0-9]{10,15}$/', $field)) {
        $eror['nomorTelepon'] = "Nomor telepon harus 10–15 digit";
    }
}

function valBpjs($field, &$eror){
    if (requiredCheck($field)) {
        $eror['nomorBpjs'] = "Nomor BPJS wajib diisi";
    } elseif (!preg_match('/^[0-9]+$/', $field)) {
        $eror['nomorBpjs'] = "Nomor BPJS harus angka";
    } elseif (!preg_match('/^[0-9]{13}$/', $field)) {
        $eror['nomorBpjs'] = "Nomor BPJS harus tepat 13 digit";
    }
}
