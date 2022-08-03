<?php
/* continue:*/

for ($ganjil = 1; $ganjil <= 100; $ganjil++) {
    if ($ganjil % 2 == 0) {
        continue;
    }
    echo "Bilangan Ganjil = $ganjil sampai 100" . PHP_EOL;
}

echo "\n";

for ($genap = 1; $genap <= 100; $genap++) {
    if ($genap % 2 == 1) {
        continue;
    }
    echo "Bilangan Genap = $genap sampai 100" . PHP_EOL;
}