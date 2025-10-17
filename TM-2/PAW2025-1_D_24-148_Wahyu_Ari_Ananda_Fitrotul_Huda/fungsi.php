<?php

function isEmpty($data) {
    return trim($data) === '';
}


function isAlphabet($data) {
    return preg_match("/^[A-Za-z\s]+$/", $data);
}


function isNumericVal($data) {
    return preg_match("/^[0-9]+$/", $data);
}


function isAlphanumeric($data) {
    return preg_match("/^[A-Za-z0-9]+$/", $data);
}
?>
