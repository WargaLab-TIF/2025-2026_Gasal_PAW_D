<?php 
	include 'validate.inc';
	

		function requireCheck($field)
		{
			$field = trim($field);
			return empty($field);
		}

		function validateName($field, &$errors)
		{
		    if (requireCheck($field)) {
		        $errors['fname'] = 'Kolom Nama depan wajib diisi.';
		    
		    } elseif (!preg_match("/^[a-zA-Z\s']+$/", $field)) {
		        $errors['fname'] = 'Kolom Nama depan hanya boleh berisi alphabet dan spasi.';
		      
		    } elseif (strlen($field) >= 15) {
		        $errors['fname'] = 'Kolom Nama depan harus terdiri dari 15 karakter.';
		    }
		}

		function validateLName($field,&$errors)
		{
			if (requireCheck($field)) {
				$errors['ename'] = 'Kolom nama belakang wajib diisi';
			}elseif (!preg_match("/^([a-zA-Z ]*)$/", $field)) {
				$errors['ename'] = "Kolom nama belakang hanya boleh alfabet";
			}
		}

		function validateNik($field, &$errors)
		{
		    if (requireCheck($field)) {
		        $errors['nik'] = 'Kolom NIK wajib diisi.';
		    
		    } elseif (!is_numeric($field)) {
		        $errors['nik'] = 'Kolom NIK hanya boleh berisi angka.';
		      
		    } elseif (strlen($field) != 16) {
		        $errors['nik'] = 'Kolom NIK harus terdiri dari 16 digit.';
		    }
		}

		function validateNohp($field,&$errors)
		{
			if (requireCheck($field)) {
				$errors['nohp'] = 'Kolom No Hp wajib diisi';
			}elseif (!preg_match("/^\d*$/", $field)) {
				$errors['nohp'] = "Kolom No Hp hanya boleh numerik";
			}
		}
		function validateTbbb($field,&$errors)
		{
			if (requireCheck($field)) {
				$errors['tbbb'] = 'Kolom Tinggi badan wajib diisi';
			}elseif (!preg_match("/^[a-zA-Z0-9\/]*$/", $field)) {
				$errors['tbbb'] = "Kolom Tinggi Badan dan Berat Badan harus dengan slash";
			}
		}
		function validateBlood($field, &$errors)
		{
		    if (requireCheck($field)) {
		        $errors['blood'] = 'Kolom golongan darah wajib diisi.';
		    } elseif (!preg_match('/^(A|B|AB|O)*$/', $field)) {
		        $errors['blood'] = 'Golongan darah tidak valid. Pilih antara A, B, AB, atau O.';
		    }
		}


 ?>