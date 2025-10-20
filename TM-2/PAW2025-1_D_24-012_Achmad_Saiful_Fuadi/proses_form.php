<?php
// Sanitize input
$nama = sanitize_input($nama);
$nik = sanitize_input($nik);
$tempat_lahir = sanitize_input($tempat_lahir);
$tanggal_lahir = sanitize_input($tanggal_lahir);
$alamat = sanitize_input($alamat);
$no_telepon = sanitize_input($no_telepon);
$email = sanitize_input($email);
$keluhan = sanitize_input($keluhan);
$no_bpjs = sanitize_input($no_bpjs);

// Validasi required fields
$required_fields = [
    'nama' => 'Nama Lengkap',
    'nik' => 'NIK', 
    'tempat_lahir' => 'Tempat Lahir',
    'tanggal_lahir' => 'Tanggal Lahir',
    'alamat' => 'Alamat',
    'no_telepon' => 'No. Telepon',
    'keluhan' => 'Keluhan'
];

foreach ($required_fields as $field => $label) {
    if (empty(trim($$field))) {
        $errors[] = "Field $label wajib diisi";
    }
}

if (empty($errors)) {
    // Validasi lainnya (alpha, numeric, dll)
    if ($error = validate_alpha($nama, 'Nama')) $errors[] = $error;
    if ($error = validate_alpha($tempat_lahir, 'Tempat lahir')) $errors[] = $error;
    
    if ($error = validate_numeric($nik, 'NIK')) $errors[] = $error;
    if ($error = validate_numeric($no_telepon, 'No. Telepon')) $errors[] = $error;
    if (!empty($no_bpjs) && ($error = validate_numeric($no_bpjs, 'No. BPJS'))) {
        $errors[] = $error;
    }
    
    if ($error = validate_alphanumeric($alamat, 'Alamat')) $errors[] = $error;
    if ($error = validate_alphanumeric($keluhan, 'Keluhan')) $errors[] = $error;
    
    if (is_numeric($nik) && ($error = validate_numeric_length($nik, 16, 'NIK'))) {
        $errors[] = $error;
    }
    if (!empty($no_bpjs) && is_numeric($no_bpjs) && 
        ($error = validate_numeric_length($no_bpjs, 11, 'No. BPJS'))) {
        $errors[] = $error;
    }
    
    if ($error = validate_string_length($nama, 3, 50, 'Nama')) $errors[] = $error;
    if ($error = validate_string_length($alamat, 10, 200, 'Alamat')) $errors[] = $error;
    
    if (!empty($email) && ($error = validate_email($email))) $errors[] = $error;
    if ($error = validate_phone($no_telepon)) $errors[] = $error;
    if ($error = validate_date($tanggal_lahir)) $errors[] = $error;
}
?>