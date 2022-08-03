<?php
// is_function, untuk mengecek suatu tipe data dalam variabel
// tiap tipe data yang dicek, akan menghasilkan boolean

echo "apakah tipe data dalam variabel string?" . PHP_EOL;
$string = "string";
var_dump(is_string($string));
var_dump(is_int($string));
var_dump(is_array($string));
var_dump(is_float($string));
var_dump(is_bool($string));

echo "apakah tipe data dalam variabel integer?" . PHP_EOL;
$integer = 100;
var_dump(is_string($integer));
var_dump(is_int($integer));
var_dump(is_array($integer));
var_dump(is_float($integer));
var_dump(is_bool($integer));