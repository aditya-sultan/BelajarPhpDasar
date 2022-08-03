<?php
// menambahkan parameter pada function
/* jika suatu value dimasukkan ke dalam function, maka value tersebut
akan langsung tersimpan ke dalam variabel yang di eksekusi */

function sayHello($name)
{
    echo "Hello $name, are you good today?" . PHP_EOL;
}

/* nah kalau kita memasukan parameter pada variabel yang akan dieksekudi, 
otomatis kedua parameter diatas akan tersimpan ke dalam variabel */
sayHello("Aditya");
sayHello("Lucis");

// default argument value
/* bila kita ingin memanggil function tanpa memasukkan parameter, kita
bisa menentukan data defaultnya */
function sayYo($firstname, $lastname = "Anonymous")
{
    echo "Hello $firstname $lastname are you good today?" . PHP_EOL;
}
sayYo("Aditya", "");
sayYo("Caelum");

// type declaration
// jika kita ingin mengkonversikan tipe data pada sebuah function
function sum(int $x, int $y)
{
    $z = $x + $y;
    echo "total $x + $y = $z" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

// variabel length argument list
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(", ", $values) . " = $total" . PHP_EOL;
}
sumAll(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);