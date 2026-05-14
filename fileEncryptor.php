<?php
function encryptFile($unencryptedFile, $key, $encryptedFile){
    $key = substr(sha1($key, true), 0, 16);
    $iv = openssl_random_pseudo_bytes(16);
}