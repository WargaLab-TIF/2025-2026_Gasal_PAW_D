<?php

require_once 'functions.php';

// Inisialisasi variabel untuk data form dan pesan error
$nama_pasien = $nik = $no_hp = $jenis_kelamin = $alamat = $no_registrasi = "";
$nama_pasien_err = $nik_err = $no_hp_err = $jenis_kelamin_err = $alamat_err = $no_registrasi_err = "";
$success_message = "";

// Memproses data form ketika form di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil dan bersihkan data dari form
    $nama_pasien = trim($_POST['nama_pasien']);
    $nik = trim($_POST['nik']);
    $no_hp = trim($_POST['no_hp']);
    $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $alamat = trim($_POST['alamat']);
    $no_registrasi = trim($_POST['no_registrasi']);

    // --- Validasi Data ---

    // 1. Validasi Nama Pasien (Wajib, Alfabet)
    $nama_pasien_err = validate_required($nama_pasien) ?: validate_alpha($nama_pasien);
    
    // 2. Validasi NIK (Wajib, Numerik, Panjang 16 digit)
    $nik_err = validate_required($nik) ?: (validate_numeric($nik) ?: validate_numeric_length($nik, 16));

    // 3. Validasi No. HP (Wajib, Numerik)
    $no_hp_err = validate_required($no_hp) ?: validate_numeric($no_hp);

    // 4. Validasi Jenis Kelamin (Wajib)
    $jenis_kelamin_err = validate_required($jenis_kelamin);

    // 5. Validasi Alamat (Wajib)
    $alamat_err = validate_required($alamat);
    
    // 6. Validasi No. Registrasi (Wajib, Alfanumerik, Panjang 8 karakter)
    $no_registrasi_err = validate_required($no_registrasi) ?: (validate_alphanumeric($no_registrasi) ?: validate_char_length($no_registrasi, 8));


    // Cek jika tidak ada error sama sekali
    if (empty($nama_pasien_err) && empty($nik_err) && empty($no_hp_err) && empty($jenis_kelamin_err) && empty($alamat_err) && empty($no_registrasi_err)) {
        $success_message = "Pendaftaran Pasien Baru Berhasil!";
        // Kosongkan variabel agar form menjadi bersih setelah sukses
        $nama_pasien = $nik = $no_hp = $jenis_kelamin = $alamat = $no_registrasi = "";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pasien Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Form Pendaftaran Pasien Baru</h2>

        <?php if (!empty($success_message)): ?>
            <div class="success-message"><?php echo $success_message; ?></div>
        <?php endif; ?>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <div class="form-group">
                <label for="nama_pasien">Nama Lengkap Pasien</label>
                <input type="text" id="nama_pasien" name="nama_pasien" value="<?php echo htmlspecialchars($nama_pasien); ?>">
                <span class="error"><?php echo $nama_pasien_err; ?></span>
            </div>

            <div class="form-group">
                <label for="nik">NIK (16 Digit)</label>
                <input type="text" id="nik" name="nik" value="<?php echo htmlspecialchars($nik); ?>">
                <span class="error"><?php echo $nik_err; ?></span>
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor HP</label>
                <input type="text" id="no_hp" name="no_hp" value="<?php echo htmlspecialchars($no_hp); ?>">
                <span class="error"><?php echo $no_hp_err; ?></span>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio-group">
                    <label for="pria">
                        <input type="radio" id="pria" name="jenis_kelamin" value="Pria" <?php if ($jenis_kelamin == "Pria") echo "checked"; ?>> Pria
                    </label>
                    <label for="wanita">
                        <input type="radio" id="wanita" name="jenis_kelamin" value="Wanita" <?php if ($jenis_kelamin == "Wanita") echo "checked"; ?>> Wanita
                    </label>
                </div>
                <span class="error"><?php echo $jenis_kelamin_err; ?></span>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" rows="4"><?php echo htmlspecialchars($alamat); ?></textarea>
                <span class="error"><?php echo $alamat_err; ?></span>
            </div>
            
            <div class="form-group">
                <label for="no_registrasi">No. Registrasi (Contoh: REG12345, 8 Karakter)</label>
                <input type="text" id="no_registrasi" name="no_registrasi" value="<?php echo htmlspecialchars($no_registrasi); ?>">
                <span class="error"><?php echo $no_registrasi_err; ?></span>
            </div>

            <input type="submit" value="Daftar">
        </form>
    </div>

</body>
</html>