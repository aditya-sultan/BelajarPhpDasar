<?php
$firstName = [
    "FirstName" => "Aditya"
];

$middleName = [
    "MiddleName" => "Lucis"
];

$LastName = [
    "LastName" => "Caelum"
];

var_dump($firstName + $middleName + $LastName);


// perbandingan operator Array
$a = [
    "Firs_tName" => "Aditya Lucis",
    "Last_Name" => "Caelum"
];

$b = [
    "Last_Name" => "Caelum",
    "Firs_tName" => "Aditya Lucis"
];

// Equality, true jika memiliki value yang sama
echo "Equality" . PHP_EOL;
var_dump($a == $b);
echo "\n";

// Identity, true jika memiliki key value yang sama
echo "Identity" . PHP_EOL;
var_dump($a === $b);