<?php

//perulangan for
for ($i = 0; $i <= 11; $i++) {
    echo "Testing... " . $i . " Complete" . PHP_EOL;
}

//perulangan while
$test = 0;
while ($test < 101) {
    echo "Testing... " . $test . PHP_EOL;
    $test++;
}

//perulangan do while
$ngetes = 11;
do {
    echo "Testing... " . $ngetes . PHP_EOL;
    $ngetes--;
} while ($ngetes > 0);


//perulangan foreach
$book = [
    "The Crown Of A Sinner - Luka Terakhir",
    "The Crown Of A Sinner - Genangan Terakhir",
    "The Crown Of A Sinner - Hakim Terakhir",
    "The Crown Of A Sinner - Interupsi Terakhir"
];

echo "Judul Buku Karangan Sultan Aditia: ";
foreach ($book as $judul) {
    echo $judul;
}