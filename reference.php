<?php
/* reference adalah cara mengakses value dari variabel dengan variabel yang lain.
kita juga bisa merubah value dari variabel aslinya dengan variabel yang lain. */

// Assign By Reference
// yang pertama adalah Assign By Reference. bisa membuat beberapa variabel menuju ke valu yang sama

$name = "Aditya";
$othername = &$name;
$othername = "Lucis";

echo $name . PHP_EOL;

// Selanjutnya yang bisa dilakukan di PHP adalah, mengirim data ke function dengan reference
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

// Returning reference. untuk mengembalikan reference pada function
function &getvalue()
{
    static $value = 100;
    return $value;
}


$a = &getvalue();
$a = 200;

$b = &getvalue();
echo $b . PHP_EOL;