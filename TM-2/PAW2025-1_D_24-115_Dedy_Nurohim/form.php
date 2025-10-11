<div class="input-box">
    <div class="input-container">
        <label for="nama">Nama Lengkap *</label>
        <input type="text" id="nama" name="nama" value="<?= showValue('nama') ?>">
    </div>
    <span class="eror"><?= $errors['nama'] ?? '' ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="no_rekening">Nomor Rekening * (10 digit)</label>
        <input type="text" id="no_rekening" name="no_rekening" value="<?= showValue('no_rekening') ?>">
    </div>
    <span class="eror"><?= $errors['no_rekening'] ?? '' ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="alamat">Alamat Lengkap *</label>
        <textarea id="alamat" name="alamat" rows="3"><?= showValue('alamat') ?></textarea>
    </div>
    <span class="eror"><?= $errors['alamat'] ?? '' ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="jenis_tabungan">Jenis Tabungan *</label>
        <select id="jenis_tabungan" name="jenis_tabungan">
            <option value="">Pilih Jenis Tabungan</option>
            <option value="reguler" <?= showValue('jenis_tabungan') == 'reguler' ? 'selected' : '' ?>>Tabungan Reguler</option>
            <option value="berjangka" <?= showValue('jenis_tabungan') == 'berjangka' ? 'selected' : '' ?>>Tabungan Berjangka</option>
            <option value="bisnis" <?= showValue('jenis_tabungan') == 'bisnis' ? 'selected' : '' ?>>Tabungan Bisnis</option>
        </select>
    </div>
    <span class="eror"><?= $errors['jenis_tabungan'] ?? '' ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="saldo">Saldo Awal *</label>
        <input type="text" id="saldo" name="saldo" value="<?= showValue('saldo') ?>">
    </div>
    <span class="eror"><?= $errors['saldo'] ?? '' ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="telepon">Nomor Telepon * (10-13 digit)</label>
        <input type="text" id="telepon" name="telepon" value="<?= showValue('telepon') ?>">
    </div>
    <span class="eror"><?= $errors['telepon'] ?? '' ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="email">Email *</label>
        <input type="text" id="email" name="email" value="<?= showValue('email') ?>">
    </div>
    <span class="eror"><?= $errors['email'] ?? '' ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <input type="submit" name="submit" value="Simpan Data" class="btn-submit">
    </div>
</div>