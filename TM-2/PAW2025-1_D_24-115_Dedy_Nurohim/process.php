<?php
$errors = [];
$fields = ['nama', 'no_rekening', 'alamat', 'jenis_tabungan', 'saldo', 'telepon', 'email'];
foreach ($fields as $field) {
    $error = validateRequired($_POST[$field] ?? '', ucfirst(str_replace('_', ' ', $field)));
    if (!empty($error)) {
        $errors[$field] = $error;
    }
}

if (empty($errors['nama'])) {
    $error = validateAlphabet($_POST['nama'], 'Nama Lengkap');
    if (!empty($error)) {
        $errors['nama'] = $error;
    }
}

if (empty($errors['no_rekening'])) {
    $error = validateNumericLength($_POST['no_rekening'], 'Nomor Rekening', 10);
    if (!empty($error)) {
        $errors['no_rekening'] = $error;
    }
}

if (empty($errors['saldo'])) {
    $error = validateNumeric($_POST['saldo'], 'Saldo');
    if (!empty($error)) {
        $errors['saldo'] = $error;
    }
}

if (empty($errors['telepon'])) {
    $error = validateNumeric($_POST['telepon'], 'Nomor Telepon');
    if (!empty($error)) {
        $errors['telepon'] = $error;
    } else {

        $error = validateCharLength($_POST['telepon'], 'Nomor Telepon', 10, 13);
        if (!empty($error)) {
            $errors['telepon'] = $error;
        }
    }
}

if (empty($errors['alamat'])) {
    $error = validateAlphanumeric($_POST['alamat'], 'Alamat');
    if (!empty($error)) {
        $errors['alamat'] = $error;
    } else {
        $error = validateCharLength($_POST['alamat'], 'alamat', 15, 100);
        if (!empty($error)) {
            $errors['alamat'] = $error;
        }
    }
}

if (empty($errors['email'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Format email tidak valid";
    } else {
        $error = validateCharLength($_POST['email'], 'Email', 5, 100);
        if (!empty($error)) {
            $errors['email'] = $error;
        }
    }
}

if (empty($errors)) {
    $success = true;
}
