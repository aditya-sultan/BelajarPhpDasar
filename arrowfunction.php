<?php
// arrow function di khususkan untuk membuat function yang lebih sederhana
$firstName = "Aditya Lucis";
$lastName = "Caelum";

$sayHello = fn () => "Hello $firstName $lastName" . PHP_EOL;

echo $sayHello();