<?php
function esc($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
?>
<div class="panel sukses">
  <h2>Data Berhasil Disimpan</h2>
  <table class="tabel-ringkas">
    <tr><th>Nama Pasien</th><td><?= esc($namaPasien) ?></td></tr>
    <tr><th>Keluhan</th><td><?= esc($keluhanPasien) ?></td></tr>
    <tr><th>Usia</th><td><?= esc($usiaPasien) ?></td></tr>
    <tr><th>Nomor Telepon</th><td><?= esc($nomorTelepon) ?></td></tr>
    <tr><th>Nomor BPJS</th><td><?= esc($nomorBpjs) ?></td></tr>
  </table>
</div>
