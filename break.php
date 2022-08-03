<?php
// break untuk menghentikan perulangan

/* contoh di sini kita akan menghentikan perulangan yang selalu
true dengan kata kunci break */

$test = 1;

while (true) {
    echo "Testing... $test" . " complete" . PHP_EOL;
    $test++;

    if ($test > 40) {
        break;
    }
}