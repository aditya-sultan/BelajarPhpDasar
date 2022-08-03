<?php
// data null untuk menghilangkan isi variabel

$contoh = "Adit";
$contoh = null;

echo "Nama: ";
echo $contoh;
echo "\n";

// is_null untuk mengecek apakah tipe data null
echo is_null($contoh);
echo "\n";
var_dump(is_null($contoh));
echo "\n";

// unset untuk menghapus variabel
/* $example = "Lucis";
unset($example);
echo $example; */
// jika menulis program seperti diatas, maka akan terjadi error karena variabel benar-benar telah dihapus

//isset untuk mengecek keberadaan variabel dan apakah nilaninya tidak null
$example = "Lucis";
// unset($example);

echo "Prince of ";
echo $example;
echo "\n";
var_dump(isset($example));