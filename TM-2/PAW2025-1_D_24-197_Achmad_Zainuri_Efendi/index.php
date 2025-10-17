<?php
// Memasukkan file fungsi eksternal
require_once 'functions.php';

// Inisialisasi variabel untuk menampung data form dan pesan error
$nama_lengkap = '';
$nomor_ktp = '';
$nomor_telepon = '';
$jenis_rekening = '';
$errors = [];
$is_form_submitted_successfully = false;

// Cek apakah form sudah di-submit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dan bersihkan dari spasi yang tidak perlu
    $nama_lengkap = trim($_POST['nama_lengkap']);
    $nomor_ktp = trim($_POST['nomor_ktp']);
    $nomor_telepon = trim($_POST['nomor_telepon']);
    $jenis_rekening = isset($_POST['jenis_rekening']) ? $_POST['jenis_rekening'] : '';

    // --- PROSES VALIDASI ---

    // 1. Validasi Nama Lengkap (Wajib diisi & hanya alfabet)
    if (!validate_required($nama_lengkap)) {
        $errors['nama_lengkap'] = "Nama lengkap wajib diisi.";
    } elseif (!validate_alpha($nama_lengkap)) {
        $errors['nama_lengkap'] = "Nama lengkap hanya boleh berisi huruf dan spasi.";
    }

    // 2. Validasi Nomor KTP (Wajib diisi & hanya numerik)
    if (!validate_required($nomor_ktp)) {
        $errors['nomor_ktp'] = "Nomor KTP wajib diisi.";
    } elseif (!validate_numeric($nomor_ktp)) {
        $errors['nomor_ktp'] = "Nomor KTP hanya boleh berisi angka.";
    }

    // 3. Validasi Nomor Telepon (Wajib diisi & hanya numerik)
    if (!validate_required($nomor_telepon)) {
        $errors['nomor_telepon'] = "Nomor telepon wajib diisi.";
    } elseif (!validate_numeric($nomor_telepon)) {
        $errors['nomor_telepon'] = "Nomor telepon hanya boleh berisi angka.";
    }
    
    // 4. Validasi Jenis Rekening (Wajib dipilih)
    if (!validate_required($jenis_rekening)) {
        $errors['jenis_rekening'] = "Jenis rekening wajib dipilih.";
    }

    // Jika tidak ada error sama sekali, set flag sukses
    if (empty($errors)) {
        $is_form_submitted_successfully = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembukaan Rekening Bank</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        
        <?php if ($is_form_submitted_successfully): ?>
            <div class="success-container">
                <h2>✅ Pendaftaran Berhasil!</h2>
                <p>Terima kasih, <strong><?php echo htmlspecialchars($nama_lengkap); ?></strong>. Data Anda telah kami terima.</p>
                <p>Rekening <strong><?php echo htmlspecialchars($jenis_rekening); ?></strong> Anda sedang dalam proses.</p>
            </div>
        <?php else: ?>
            <h1>Form Pembukaan Rekening Bank</h1>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap Sesuai KTP</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo htmlspecialchars($nama_lengkap); ?>">
                    <?php if (isset($errors['nama_lengkap'])): ?>
                        <span class="error-message"><?php echo $errors['nama_lengkap']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="nomor_ktp">Nomor KTP (NIK)</label>
                    <input type="text" id="nomor_ktp" name="nomor_ktp" value="<?php echo htmlspecialchars($nomor_ktp); ?>">
                    <?php if (isset($errors['nomor_ktp'])): ?>
                        <span class="error-message"><?php echo $errors['nomor_ktp']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="nomor_telepon">Nomor Telepon Aktif</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" value="<?php echo htmlspecialchars($nomor_telepon); ?>">
                    <?php if (isset($errors['nomor_telepon'])): ?>
                        <span class="error-message"><?php echo $errors['nomor_telepon']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="jenis_rekening">Pilih Jenis Rekening</label>
                    <select id="jenis_rekening" name="jenis_rekening">
                        <option value="" <?php if ($jenis_rekening == '') echo 'selected'; ?>>-- Pilih Opsi --</option>
                        <option value="Tabungan" <?php if ($jenis_rekening == 'Tabungan') echo 'selected'; ?>>Tabungan</option>
                        <option value="Giro" <?php if ($jenis_rekening == 'Giro') echo 'selected'; ?>>Giro</option>
                        <option value="Deposito" <?php if ($jenis_rekening == 'Deposito') echo 'selected'; ?>>Deposito</option>
                    </select>
                     <?php if (isset($errors['jenis_rekening'])): ?>
                        <span class="error-message"><?php echo $errors['jenis_rekening']; ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="submit-btn">Buka Rekening</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>