<!-- NIK -->
<div class="input-box">
  <div class="input-container">
    <div class="ts">
      <label for="nik">NIK</label>
      <span class="eror"><?php echo $errors['nik'] ?? ''; ?></span>
    </div>
    <input 
    id="nik"
      type="text" 
      name="nik"
      <?php 
        if (isset($errors) && !isset($errors['nik'])) {
          $temp = $_POST['nik'];
          echo "value='$temp'";
        }
      ?>
    >
  </div>
</div>

<!-- Nomor Rekening -->
<div class="input-box">
  <div class="input-container">
    <div class="ts">
      <label for="rekening">Nomor Rekening</label>
      <span class="eror"><?php echo $errors['rekening'] ?? ''; ?></span>
    </div>
    <input 
    id="rekening"

      type="text" 
      name="rekening"
      <?php 
        if (isset($errors) && !isset($errors['rekening'])) {
          $temp = $_POST['rekening'];
          echo "value='$temp'";
        }
      ?>
    >
  </div>
</div>

<!-- Nama -->
<div class="input-box">
  <div class="input-container">
    <div class="ts">
      <label for="nama">Nama (Sesuai KTP)</label>
      <span class="eror"><?php echo $errors['nama'] ?? ''; ?></span>
    </div>
    <input
    id="nama"

      type="text" 
      name="nama"
      <?php 
        if (isset($errors) && !isset($errors['nama'])) {
          $temp = $_POST['nama'];
          echo "value='$temp'";
        }
      ?>
    >
  </div>
</div>

<!-- Password M-Banking -->
<div class="input-box">
  <div class="input-container">
    <div class="ts">
      <label for="password">Password M-Banking</label>
      <span class="eror"><?php echo $errors['Password'] ?? ''; ?></span>
    </div>
    <input 
    id="password"

      type="text" 
      name="Password"
      <?php 
        if (isset($errors) && !isset($errors['Password'])) {
          $temp = $_POST['Password'];
          echo "value='$temp'";
        }
      ?>
    >
  </div>
</div>

<!-- Tombol Submit -->
<div class="input-box">
  <div class="input-container tombol">
    <input type="submit" name="submit" value="Daftar">
  </div>
</div>
