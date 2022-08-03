<?php
function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}
sayHello();

// membuat function di dalam if statement

/*

pastikan variabel pada if statment bernilai true. jika false
maka akan terjadi error. seperti di bawah ini

$buat = false;
if ($buat){
    function sayYo()
{
    echo "Hello Mamen" . PHP_EOL;
}
sayYo();
}

*/

// jika variabel bernilai true, maka function akan dieksekusi

$buat = true;
if ($buat) {
    function yoBro()
    {
        echo "Hello Bro" . PHP_EOL;
    }
    yoBro();
}