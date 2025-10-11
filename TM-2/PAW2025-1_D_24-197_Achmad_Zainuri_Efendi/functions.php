<?php

/**
 * Fungsi untuk memvalidasi bahwa sebuah masukan tidak kosong.
 * @param string $data data yang akan divalidasi.
 * @return bool true jika data tidak kosong, false jika kosong.
 */
function validate_required($data)
{
    return !empty(trim($data));
}

/**
 * Fungsi untuk memvalidasi bahwa sebuah masukan hanya berisi huruf dan spasi.
 * Sesuai dengan VALIDASI 2.
 * @param string $data data yang akan divalidasi.
 * @return bool true jika data valid, false jika tidak.
 */
function validate_alpha($data)
{
    // Menggunakan regular expression untuk mengecek apakah string hanya berisi huruf (a-z, A-Z) dan spasi.
    return preg_match('/^[a-zA-Z\s]+$/', $data);
}

/**
 * Fungsi untuk memvalidasi bahwa sebuah masukan hanya berisi angka (numerik).
 * Sesuai dengan VALIDASI 3.
 * @param string $data data yang akan divalidasi.
 * @return bool true jika data valid, false jika tidak.
 */
function validate_numeric($data)
{
    // Menggunakan regular expression untuk mengecek apakah string hanya berisi digit (0-9).
    return preg_match('/^[0-9]+$/', $data);
}