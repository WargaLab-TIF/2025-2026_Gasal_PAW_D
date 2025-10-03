<?php
	if (isset($_POST['batas'])){
		$batas = $_POST['batas'];
		echo "Batas ukuran : $batas<br>";
	}

	if (isset($_POST['warna'])){
		$warna = $_POST['warna'];
		echo "Warna yang dipilih : $warna<br>";
	}

	if (isset($_POST['pola'])){
		$pola = $_POST['pola'];
		echo "Pola yang dipilih : $pola<br>";
	}
	
?>
