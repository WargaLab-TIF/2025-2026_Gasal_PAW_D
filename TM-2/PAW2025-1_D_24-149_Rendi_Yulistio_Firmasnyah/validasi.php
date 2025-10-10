<?php
function check($field) {
    $field = trim($field);
    return empty($field);
}

function checkNama($field, &$eror) {
    if (check($field)) {
        $eror['nama'] = 'Kolom Nama Wajib Diisi !';
    } elseif (!preg_match('/^[a-zA-Z\s]+$/', $field)) {
        $eror['nama'] = 'Kolom Nama Hanya Berisi Alfabet !';
    } elseif (strlen($field) < 3 || strlen($field) > 30) {
        $eror['nama'] = 'Kolom Nama Harus Berisi 3-30 Karakter';
    }
}

function checkKtp($field, &$eror) {
    if (check($field)) {
        $eror['no_ktp'] = 'Kolom No KTP Wajib Diisi !';
    } elseif (!preg_match('/^[0-9\s]+$/', $field)) {
        $eror['no_ktp'] = 'Kolom No KTP Harus Numerik !';
    } elseif (strlen($field) != 16) {
        $eror['no_ktp'] = 'Kolom No KTP Harus 16 Digit !';
    }
}

function checkTlp($field, &$eror) {
    if (check($field)) {
        $eror['no_tlp'] = 'Kolom No Telepon Wajib Diisi !';
    } elseif (!preg_match('/^[0-9\s]+$/', $field)) {
        $eror['no_tlp'] = 'Kolom No Telepon Harus Numerik !'; 
    } elseif (strlen($field) < 10 || strlen($field) > 13) {
        $eror['no_tlp'] = 'Kolom No Telepon Harus Berisi 10-13 Digit !';
    }
}

function checkPin($field, &$eror) {
    if (check($field)) {
        $eror['pin'] = 'Kolom PIN Wajib Diisi !';
    } elseif (!preg_match('/^(?=.*[A-Za-z])(?=.*[0-9])[a-zA-Z0-9\s]+$/', $field)) {
        $eror['pin'] = 'Kolom PIN Harus Berisi Alfabet dan Numerik !';
    } elseif (strlen($field) < 4 || strlen($field) > 6) {
        $eror['pin'] = 'Kolom PIN Harus Berisi 4-6 Digit !';
    }
}

function checkRekening($field, &$eror) {
    if (check($field)) {
        $eror['no_rekening'] = 'Kolom No Rekening Wajib Diisi !';
    } elseif (!preg_match('/^[0-9\s]+$/', $field)) {
        $eror['no_rekening'] = 'Kolom No Rekening Harus Berisi Numerik !';
    } elseif (strlen($field) < 10 || strlen($field) > 16) {
        $eror['no_rekening'] = 'Kolom No Rekening harus Berisi 10-16 Digit !';
    }
}

function checkID($field, &$eror) {
    if (check($field)) {
        $eror['id_nasabah'] = 'Kolom ID Nasabah Wajib Diisi !';
    } elseif (!preg_match('/^(?=.*[A-Za-z])(?=.*[0-9])[a-zA-Z0-9\s]+$/', $field)) {
        $eror['id_nasabah'] = 'Kolom ID Nasabah Harus Berisik Alfabet dan Numerik !';
    } elseif (strlen($field) < 4 || strlen($field) > 6) {
        $eror['id_nasabah'] = 'Kolom ID Nasabah Harus Berisi 4-6 Digit !';
    }
}

?>