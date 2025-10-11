<label>Nama Pasien</label>
<input type="text" name="namaPasien" value="<?= htmlspecialchars($namaPasien) ?>">
<?php if(isset($eror['namaPasien'])): ?><div class="eror"><?= $eror['namaPasien'] ?></div><?php endif; ?>

<label>Keluhan</label>
<input type="text" name="keluhanPasien" value="<?= htmlspecialchars($keluhanPasien) ?>">
<?php if(isset($eror['keluhanPasien'])): ?><div class="eror"><?= $eror['keluhanPasien'] ?></div><?php endif; ?>

<label>Usia</label>
<input type="text" name="usiaPasien" value="<?= htmlspecialchars($usiaPasien) ?>">
<?php if(isset($eror['usiaPasien'])): ?><div class="eror"><?= $eror['usiaPasien'] ?></div><?php endif; ?>

<label>Nomor Telepon</label>
<input type="text" name="nomorTelepon" value="<?= htmlspecialchars($nomorTelepon) ?>">
<?php if(isset($eror['nomorTelepon'])): ?><div class="eror"><?= $eror['nomorTelepon'] ?></div><?php endif; ?>

<label>Nomor BPJS / Asuransi</label>
<input type="text" name="nomorBpjs" value="<?= htmlspecialchars($nomorBpjs) ?>">
<?php if(isset($eror['nomorBpjs'])): ?><div class="eror"><?= $eror['nomorBpjs'] ?></div><?php endif; ?>

<div class="actions">
  <button type="submit" name="submit">Kirim</button>
  <button type="reset" class="ghost">Reset</button>
</div>
