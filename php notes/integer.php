<?php
//They can be specified in decimal, hexadecimal, octal and binary.
//To use octal precede with the number 0.
//To use octal as of php 8.1.0 precede with 0o or 0O.
//To use hexadecimal precede with 0x
//To use binary precede with 0b
//As of php 7.4.0 you can use underscore between digits for readability or literals.But not to worry since they are removed by php's scanner.

$a = 1234; // decimal number
$a = 0123; // octal number (equivalent to 83 decimal)
$a = 0o123; // octal number (as of PHP 8.1.0)
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = 1_234_567; // decimal number (as of PHP 7.4.0)