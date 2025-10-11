<?php if (!empty($errors)): ?>
    <div class="error-container">
        <h3>Terjadi kesalahan:</h3>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<label for="nama">Nama Lengkap *</label>
<input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
<?php if(isset($errors['nama'])): ?><div class="error"><?php echo $errors['nama']; ?></div><?php endif; ?>
<small>Contoh: saiful fuadi</small>

<label for="nik">NIK (16 digit) *</label>
<input type="text" id="nik" name="nik" value="<?php echo htmlspecialchars($nik); ?>">
<?php if(isset($errors['nik'])): ?><div class="error"><?php echo $errors['nik']; ?></div><?php endif; ?>
<small>Contoh: 3271011501980001</small>

<label for="tempat_lahir">Tempat Lahir *</label>
<input type="text" id="tempat_lahir" name="tempat_lahir" value="<?php echo htmlspecialchars($tempat_lahir); ?>">
<?php if(isset($errors['tempat_lahir'])): ?><div class="error"><?php echo $errors['tempat_lahir']; ?></div><?php endif; ?>
<small>Contoh: bangkalan</small>

<label for="tanggal_lahir">Tanggal Lahir *</label>
<input type="text" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo htmlspecialchars($tanggal_lahir); ?>">
<?php if(isset($errors['tanggal_lahir'])): ?><div class="error"><?php echo $errors['tanggal_lahir']; ?></div><?php endif; ?>
<small>Format: DD-MM-YYYY (Contoh: 15-01-1990)</small>

<label for="alamat">Alamat Lengkap *</label>
<textarea id="alamat" name="alamat" rows="3"><?php echo htmlspecialchars($alamat); ?></textarea>
<?php if(isset($errors['alamat'])): ?><div class="error"><?php echo $errors['alamat']; ?></div><?php endif; ?>
<small>Contoh: Jl. trunojoyo No. 123, bangkalan</small>

<label for="no_telepon">No. Telepon *</label>
<input type="text" id="no_telepon" name="no_telepon" value="<?php echo htmlspecialchars($no_telepon); ?>">
<?php if(isset($errors['no_telepon'])): ?><div class="error"><?php echo $errors['no_telepon']; ?></div><?php endif; ?>
<small>Contoh: 081234567890</small>

<label for="email">Email</label>
<input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
<?php if(isset($errors['email'])): ?><div class="error"><?php echo $errors['email']; ?></div><?php endif; ?>
<small>Contoh: nama@email.com</small>

<label for="keluhan">Keluhan Utama *</label>
<textarea id="keluhan" name="keluhan" rows="3"><?php echo htmlspecialchars($keluhan); ?></textarea>
<?php if(isset($errors['keluhan'])): ?><div class="error"><?php echo $errors['keluhan']; ?></div><?php endif; ?>
<small>Jelaskan keluhan kesehatan Anda</small>

<label for="no_bpjs">No. BPJS (11 digit)</label>
<input type="text" id="no_bpjs" name="no_bpjs" value="<?php echo htmlspecialchars($no_bpjs); ?>">
<?php if(isset($errors['no_bpjs'])): ?><div class="error"><?php echo $errors['no_bpjs']; ?></div><?php endif; ?>
<small>Contoh: 00012345678</small>

<div class="actions">
    <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</div>