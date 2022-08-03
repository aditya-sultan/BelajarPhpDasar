<?php
// loop array tanpa foreach

$name = ["Aditya", "Lucis", "Caelum"];

for ($i = 0; $i < count($name); $i++) {
    echo "Urutan Nama $i = "  . $name[$i] . PHP_EOL;
}

// loop array dengan foreach
$names = ["Aditya", "Lucis", "Caelum"];

foreach ($names as $nama) {
    echo "Hello $nama " . PHP_EOL;
}


// foreach dengan value
$isim = [
    "firstName" => "Aditya",
    "middleName" => "Lucis",
    "lastName" => "Caelum"
];

foreach ($isim as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}