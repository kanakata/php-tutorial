<?php
function emailMasker(string $email):string
{
    list($prefix, $suffix) = explode("@", $email);

    $aesteric = "";
    if (strlen($prefix) <= 6) {

        $randomCycle = random_int(1, 10);
        for ($i = 1; $i <= $randomCycle; $i++) {
            $aesteric = substr_replace($aesteric, "*", $randomCycle);
        }
        $maskedPrefix = substr_replace($prefix, $aesteric, 1, -1,);
    } else {

        $randomCycle = random_int(1, 10);
        for ($i = 1; $i <= $randomCycle; $i++) {
            $aesteric = substr_replace($aesteric, "*", $randomCycle);
        }
        $maskedPrefix = substr_replace($prefix, $aesteric, 1, -2);
    }

    return $maskedEmail = $maskedPrefix . "@" . $suffix;
}

$email = "pat@gmail.com";
echo emailMasker($email);
