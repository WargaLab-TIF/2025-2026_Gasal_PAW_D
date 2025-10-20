<?php
function validateRequired($value, $fieldName)
{
    if (empty(trim($value))) {
        return "Field $fieldName harus diisi";
    }
    return "";
}

function validateAlphabet($value, $fieldName)
{
    if (!empty($value)) {
        if (!preg_match("/^[a-zA-Z\s]+$/", $value)) {
            return "Field $fieldName hanya boleh berisi huruf";
        }
    }
    return "";
}

function validateNumeric($value, $fieldName)
{
    if (!empty($value)) {
        if (!preg_match("/^[0-9]+$/", $value)) {
            return "Field $fieldName hanya boleh berisi angka";
        }
    }
    return "";
}

function validateAlphanumeric($value, $fieldName)
{
    if (!empty($value)) {
        if (!preg_match("/^[a-zA-Z0-9\s]+$/", $value)) {
            return "Field $fieldName hanya boleh berisi huruf dan angka";
        }
    }
    return "";
}

function validateNumericLength($value, $fieldName, $length)
{
    $error = validateNumeric($value, $fieldName);
    if (!empty($error)) return $error;

    if (!empty($value) && strlen($value) != $length) {
        return "Field $fieldName harus terdiri dari $length digit";
    }
    return "";
}

function validateCharLength($value, $fieldName, $minLength, $maxLength)
{
    $length = strlen(trim($value));
    if (!empty($value) && ($length < $minLength || $length > $maxLength)) {
        return "Field $fieldName harus antara $minLength sampai $maxLength karakter";
    }
    return "";
}

function showValue($fieldName)
{
    return isset($_POST[$fieldName]) ? htmlspecialchars($_POST[$fieldName]) : '';
}

function showError($errors, $fieldName)
{
    if (isset($errors[$fieldName]) && !empty($errors[$fieldName])) {
        return '<span class="error-text">' . $errors[$fieldName] . '</span>';
    }
    return '';
}
