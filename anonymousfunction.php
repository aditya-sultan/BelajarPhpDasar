<?php
// function tanpa nama. kita tidak perlu membuat nama function karena functiona akan tersimpan dalam variabel
/* Anonymous function biasa digunakan sebagai argumen atau sebagai
value variabel. anonymous function juga bisa membuat kita mengirim
function sebagai di function lain */

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};
$sayHello("Aditya");
$sayHello("Lucis");

// Anonymous function sebagai argument
//function biasa
function sayGoodby(string $nation, $filter)
{
    $country = $filter($nation);
    echo "Goodby $country" . PHP_EOL;
}

sayGoodby("New York", function (string $nation): string {
    return strtoupper($nation);
});

// variabel function
$sayWelcome = function (string $origin): string {
    echo "Welcome to $origin" . PHP_EOL;
    return strtoupper($origin);
};

$sayWelcome("Lost Angeles");

// mengakses variabel di luar closure
/* secara default, funtion tidak bisa mengakses variabel di luar function.
tapi kita bisa mencobanya dengan perintah 'use'*/
$firstName = "Aditya";
$lastName = "Lucis";

$sayHay = function () use ($firstName, $lastName) {
    echo "Hay $firstName $lastName" . PHP_EOL;
};
$sayHay();