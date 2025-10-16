<!-- input nama -->
<div class="input-box">
	<div class="input-container">
		<label id="nama">Nama Lengkap</label>
		<input type="text" name="nama" value="<?= $username ?? "" ?>">
	</div>
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

<!-- inputan Nik -->
<div class="input-box">
	<div class="input-container">
		<label id="nik">Nomer induk kependudukan (NIK)</label>
		<input type="text" name="nik" value="<?= $nik ?? "" ?>">
	</div>
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

<!-- Inputan Umur  -->
<div class="input-box">
	<div class="input-container">
		<label id="umur">Umur </label>
		<input type="text" name="umur" value="<?= $umur ?? "" ?>">
	</div>
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

<!-- inputan Kode layanan -->
<div class="input-box">
	<div class="input-container">
		<label id="layanan">Kode Layanan</label>
		<input type="text" name="layanan" value="<?= $layanan ?? "" ?>">
	</div>
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

<div class="input-box">
	<div class="input-container">
		<label id="dokter">Kode dokter</label>
		<input type="text" name="dokter" value="<?= $dokter ?? "" ?>">
	</div>
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

<!-- submit button -->
<div class="input-box">
	<div class="input-container">
		<input type="submit" name="submit">
		<!-- <button type="submit" name="submit">Kirim</button> -->
	</div>
</div>