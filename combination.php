<?php
//this code calculates combinations.
function factorialNum(int $n)
{
    $data = $n;
    $value = 0;
    while ($data > 1) {
        $new_number = $data - 1;
        if ($data == $n) {
            $output = $data * $new_number;
        } else {
            $output = $value * $new_number;
        }
        $data = $new_number;
        $value = $output;
    }
    return $value;
}
function factorialDen(int $n, int $r)
{
    $number = $n - $r;
    $data = $number;
    $value = 0;
    while ($data > 1) {
        $new_number = $data - 1;
        if ($data == $number) {
            $output = $data * $new_number;
        } else {
            $output = $value * $new_number;
        }
        $data = $new_number;
        $value = $output;
    }
    if ($value == 0) {
        return 1;
    } else {
        return $value;
    }
}
function combination(int $n, int $r)
{
    return $combination = (factorialNum($n) / (factorialNum($r) * factorialDen($n, $r)));
}
echo number_format(combination(100, 3), 0, ".", ",");
