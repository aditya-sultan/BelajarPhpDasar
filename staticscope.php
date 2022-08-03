<?php
/* secara default, siklus hidup variabel function hanya sebatas function itu di eksekusi.
 jika function selesai di eksekusi, maka siklus hidup variabel function pun selesai

function increment()
{
    $test = 1;
    echo "Test = $test" . PHP_EOL;
    $test++;
}

increment();
increment();
increment();

jika kita tulis function seperti diatas, maka function yang kita buat akan 
tetap memiliki value yang sama, meski kita panggil berulang
*/

/* tapi kita bisa membuat siklus variabel itu tetap hidup, cukup dengan menambahkan
keyword static */
function increment()
{
    static $test = 1;
    echo "Test = $test" . PHP_EOL;
    $test++;
}

increment();
increment();
increment();
increment();
increment();
increment();