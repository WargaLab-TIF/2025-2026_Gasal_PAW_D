<?php

function validate_required($value, $field_name) {
    return empty(trim($value)) ? "Field $field_name wajib diisi" : "";
}

function validate_alpha($value, $field_name) {
    return (!empty($value) && !preg_match('/^[a-zA-Z\s]+$/', $value)) 
        ? "$field_name hanya boleh mengandung huruf" 
        : "";
}

function validate_numeric($value, $field_name) {
    return (!empty($value) && !is_numeric($value)) 
        ? "$field_name harus berupa angka" 
        : "";
}

function validate_alphanumeric($value, $field_name) {
    return (!empty($value) && !preg_match('/^[a-zA-Z0-9\s.,]+$/', $value)) 
        ? "$field_name hanya boleh mengandung huruf dan angka" 
        : "";
}

function validate_numeric_length($value, $length, $field_name) {
    return (!empty($value) && strlen($value) != $length) 
        ? "$field_name harus terdiri dari $length digit" 
        : "";
}

function validate_string_length($value, $min, $max, $field_name) {
    if (empty($value)) return "";
    $len = strlen(trim($value));
    return ($len < $min || $len > $max) 
        ? "$field_name harus antara $min-$max karakter" 
        : "";
}

function validate_email($value) {
    return (!empty($value) && !filter_var($value, FILTER_VALIDATE_EMAIL)) 
        ? "Format email tidak valid" 
        : "";
}

function validate_phone($value) {
    return (!empty($value) && !preg_match('/^08[1-9][0-9]{7,10}$/', $value)) 
        ? "Format nomor telepon tidak valid (contoh: 081234567890)" 
        : "";
}

function validate_date($value) {
    if (empty($value)) return "";
    $date = DateTime::createFromFormat('d-m-Y', $value);
    return (!$date || $date->format('d-m-Y') !== $value) 
        ? "Format tanggal tidak valid (gunakan DD-MM-YYYY)" 
        : "";
}

function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
