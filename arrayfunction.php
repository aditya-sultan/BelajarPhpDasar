<?php
// array function. function untuk memanipulasi array

$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var_dump(array_map(fn ($angka) => $angka * 5, $angka));
echo "\n";
var_dump($angka);
echo "\n";
rsort($angka);
var_dump($angka);

$person = [
    "first_name" => "Aditya",
    "middle_name" => "Lucis",
    "last_name" => "Caelum"
];

var_dump(array_keys($person));
var_dump(array_values($person));