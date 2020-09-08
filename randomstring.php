<?php
function createrandomstring($char) {
    $characters = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array();
    $length = strlen($characters) - 1;
    for ($i = 0; $i < $char; $i++) {
        $n = rand(1, $length);
        $pass[] = $characters[$n];
    }
    return implode($pass);
}
