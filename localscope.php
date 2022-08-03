<?php
/* Variable yang dibuat di dalam function memiliki scope local
Variable di scope local hanya bisa diakses dari dalam function itu sendiri
Artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain
*/


function createname()
{
    $name = "Aditya Lucis Caelum" . PHP_EOL;
    echo $name;
}

createname();

/* tetapi, kalau kita memanggil nama variabelnya di luar function, tidak bisa.
dan akan terjadi error 

function createname()
{
    $name = "Aditya Lucis Caelum" . PHP_EOL;
}

createname();
echo $name;

*/