<div class="input-box">
    <div class="input-container">
        <label for="nama">Masukkan Nama Lengkap</label>
        <input type="text" name="nama" id="nama" value="<?= $nama ?? ""?>">
    </div>
    <span class="eror"><?= $eror['nama'] ?? "" ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="no_ktp">Masukkan No KTP</label>
        <input type="text" name="no_ktp" id="no_ktp" value="<?= $no_ktp ?? ""?>">
    </div>
    <span class="eror"><?= $eror['no_ktp'] ?? "" ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="no_tlp">Masukkan Nomor Telepon</label>
        <input type="text" name="no_tlp" id="no_tlp" value="<?= $no_tlp ?? "" ?>">
    </div>
    <span class="eror"><?= $eror['no_tlp'] ?? "" ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="pin">Masukkan PIN</label>
        <input type="text" name="pin" id="pin" value="<?= $pin ?? "" ?>">
    </div>
    <span class="eror"><?= $eror['pin'] ?? "" ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="no_rekening">Masukkan Nomor Rekening</label>
        <input type="text" name="no_rekening" id="no_rekening" value="<?= $no_rekening ?? "" ?>">
    </div>
    <span class="eror"><?= $eror['no_rekening'] ?? "" ?></span>
</div>

<div class="input-box">
    <div class="input-container">
        <label for="id_nasabah">Masukkan ID Nasabah</label>
        <input type="text" name="id_nasabah" id="id_nasabah" value="<?= $id_nasabah ?? "" ?>">
    </div>
    <span class="eror"><?= $eror['id_nasabah'] ?? "" ?></span>
</div>

<div class="input-box">
	<div class="input-container">
		<input type="submit" name="submit">
	</div>
</div>