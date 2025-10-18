<?php 
// Validasi
function validatePattern(&$errors, $field_list, $field_name, $pattern, $err_msg)
{
	// $pattern = ; // format surname (alfabet)
	if (!isset($field_list[$field_name]) || (empty($field_list[$field_name]) && $field_list[$field_name] != 0)){
		$errors[$field_name] = "Harus Diisi";
	}
	else if (!preg_match($pattern, $field_list[$field_name])){
		$errors[$field_name] = $err_msg;
	}
}

function validate_required(&$errors,$field_list, $field_name){
	if (!isset($field_list[$field_name]) || (empty($field_list[$field_name]) && $field_list[$field_name] != 0)){
		$errors[$field_name] = 'Harus Diisi';
	}
}
 ?>
