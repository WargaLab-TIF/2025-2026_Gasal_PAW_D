<?php

/**
 * VALIDASI 1: Memeriksa apakah input kosong.
 * @param string $data Input dari user.
 * @return string|null Mengembalikan pesan error jika kosong, null jika valid.
 */
function validate_required($data) {
    if (empty(trim($data))) {
        return "Field ini wajib diisi.";
    }
    return null;
}

/**
 * VALIDASI 2: Memeriksa apakah input hanya berisi huruf dan spasi.
 * @param string $data Input dari user.
 * @return string|null Mengembalikan pesan error jika tidak valid, null jika valid.
 */
function validate_alpha($data) {
    if (!preg_match("/^[a-zA-Z\s]*$/", $data)) {
        return "Input hanya boleh berisi alfabet dan spasi.";
    }
    return null;
}

/**
 * VALIDASI 3: Memeriksa apakah input hanya berisi angka.
 * @param string $data Input dari user.
 * @return string|null Mengembalikan pesan error jika tidak valid, null jika valid.
 */
function validate_numeric($data) {
    if (!is_numeric($data)) {
        return "Input hanya boleh berisi angka.";
    }
    return null;
}

/**
 * VALIDASI 4: Memeriksa apakah input berisi kombinasi huruf dan angka.
 * @param string $data Input dari user.
 * @return string|null Mengembalikan pesan error jika tidak valid, null jika valid.
 */
function validate_alphanumeric($data) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $data)) {
        return "Input hanya boleh berisi kombinasi huruf dan angka (tanpa spasi/simbol).";
    }
    return null;
}

/**
 * VALIDASI 5: Memeriksa panjang digit tertentu untuk input numerik.
 * @param string $data Input dari user.
 * @param int $length Panjang digit yang disyaratkan.
 * @return string|null Mengembalikan pesan error jika tidak valid, null jika valid.
 */
function validate_numeric_length($data, $length) {
    if (strlen($data) != $length) {
        return "Panjang input harus tepat " . $length . " digit.";
    }
    return null;
}

/**
 * VALIDASI 6: Memeriksa panjang karakter tertentu untuk input alfabet/alfanumerik.
 * @param string $data Input dari user.
 * @param int $length Panjang karakter yang disyaratkan.
 * @return string|null Mengembalikan pesan error jika tidak valid, null jika valid.
 */
function validate_char_length($data, $length) {
    if (strlen($data) != $length) {
        return "Panjang input harus tepat " . $length . " karakter.";
    }
    return null;
}
?>