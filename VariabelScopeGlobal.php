<?php
// global scope
/* variabel yang di buat di luar function memiliki scope global.
variabel yang bersifat global tidak dapat di akses ke dalam function */

/* 

$name = "Aditya Lucis Caelum";

function sayHello()
{
    echo $name . PHP_EOL;
}

SayHello(); 

jika kita panggil variabel seperti di atas, maka akan terjadi error
*/

/* Tapi kita tetap bisa memanggil variabel bersifat global ke dalam function
dengan menggunakan kata kunci global. seperti dibawah ini; */

$name = "Aditya Lucis Caelum";

function sayHello()
{
    global $name; // global keyword
    echo $name . PHP_EOL;
}

SayHello();

/* atau, kita juga bisa memanggilnya, dengan cara memanggil variabel GLOBALS. berikut dengan 
array berisikan nama variabel yang kita panggil dalam bentuk string */

$ismi = "Aditya Lucis Caelum";

function sayYo()
{
    echo $GLOBALS["ismi"] . PHP_EOL;
}

SayYo();