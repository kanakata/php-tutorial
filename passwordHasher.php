<?php
$password = "patrick";

function hashPassword(mixed $password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

function checkIfPasswordNeedsHash(mixed $hashedPassword)
{
    if (password_needs_rehash($hashedPassword, PASSWORD_DEFAULT)) {
        return hashPassword($hashedPassword);
    }
}


function verifyPassword(mixed $password, mixed $hashedPassord)
{
    return password_verify($password, $hashedPassord);
}
