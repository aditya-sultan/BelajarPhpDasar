<?php
/* Variable function adalah kemampuan memanggil sebuah function 
dari value yang terdapat di sebuah variable*/

function heh()
{
    echo "Heh" . PHP_EOL;
}

function woy()
{
    echo "Woy"  . PHP_EOL;
}

$functionyangdipanggil = "heh";
$functionyangdipanggil();

$functionyangdipanggil = "woy";
$functionyangdipanggil();

// jika kita ingin menambahkan filter pada nilai variabel function yang kita buat
function sayHell0($finalName, $filter)
{
    $Name = $filter($finalName);
    echo "Hello $Name, why is you're so bad" . PHP_EOL;
}

sayHell0("Aditya Lucis Caelum", "strtoupper");
sayHell0("Aditya Lucis Caelum", "strtolower");