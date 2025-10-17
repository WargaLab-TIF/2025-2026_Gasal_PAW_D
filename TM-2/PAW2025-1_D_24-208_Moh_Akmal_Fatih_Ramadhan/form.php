<!-- form.php -->
<div class="grid-row">
  <div class="left">
    <label for="nama">Nama Lengkap</label>
  </div>
  <div class="right">
    <input id="nama" type="text" name="nama" placeholder="Contoh: Akmal Fatih" value="<?= isset($username) ? htmlspecialchars($username) : "" ?>">
    <span class="eror">
      <?php
      if (!empty($error["nama"])){
        foreach ($error["nama"] as $ror){
          echo $ror . "<br>";
        }
      }
      ?>
    </span>
  </div>
</div>

<div class="grid-row">
  <div class="left">
    <label for="nik">NIK</label>
  </div>
  <div class="right">
    <input id="nik" type="text" name="nik" placeholder="16 digit NIK" value="<?= isset($nik) ? htmlspecialchars($nik) : "" ?>">
    <span class="eror">
      <?php
      if (!empty($error["nik"])){
        foreach ($error["nik"] as $ror){
          echo $ror . "<br>";
        }
      }
      ?>
    </span>
  </div>
</div>

<div class="grid-row">
  <div class="left">
    <label for="umur">Umur</label>
  </div>
  <div class="right">
    <input id="umur" type="text" name="umur" placeholder="Umur (tahun)" value="<?= isset($umur) ? htmlspecialchars($umur) : "" ?>">
    <span class="eror">
      <?php
      if (!empty($error["umur"])){
        foreach ($error["umur"] as $ror){
          echo $ror . "<br>";
        }
      }
      ?>
    </span>
  </div>
</div>

<div class="grid-row">
  <div class="left">
    <label for="layanan">Kode Layanan</label>
  </div>
  <div class="right">
    <input id="layanan" type="text" name="layanan" placeholder="Contoh: A12" value="<?= isset($layanan) ? htmlspecialchars($layanan) : "" ?>">
    <span class="eror">
      <?php
      if (!empty($error["layanan"])){
        foreach ($error["layanan"] as $ror){
          echo $ror . "<br>";
        }
      }
      ?>
    </span>
  </div>
</div>

<div class="grid-row">
  <div class="left">
    <label for="dokter">Kode Dokter</label>
  </div>
  <div class="right">
    <input id="dokter" type="text" name="dokter" placeholder="5 karakter (alfanumerik)" value="<?= isset($dokter) ? htmlspecialchars($dokter) : "" ?>">
    <span class="eror">
      <?php
      if (!empty($error["dokter"])){
        foreach ($error["dokter"] as $ror){
          echo $ror . "<br>";
        }
      }
      ?>
    </span>
  </div>
</div>

<div class="grid-row buttons">
  <div class="left"></div>
  <div class="right">
    <input type="submit" name="submit" value="Kirim Data">
  </div>
</div>
