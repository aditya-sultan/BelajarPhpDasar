<?php

//integer
echo "Decimal: ";
var_dump(1234);

echo "Octal: ";
var_dump(0123);

echo "Hexadecimal: ";
var_dump(0x1A);

echo "Binary: ";
var_dump(0b11111);

$a = 10;
$b = 20;

//penjumlahan variabel
echo $a + $b . PHP_EOL;

//pengurangan variabel
echo $b - $a . PHP_EOL;

//perkalian variabel
echo $a * $b . PHP_EOL;

//permbagian variabel
echo $b / $a . PHP_EOL;

//modulus variabel
echo $a % $b . PHP_EOL;

//boolean
var_dump($a > $b);
var_dump($b > $a);
var_dump($a < $b);
var_dump($b < $a);