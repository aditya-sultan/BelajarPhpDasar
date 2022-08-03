<?php
/* ada banyak sekali funtion bawaan PHP yang digunakan untuk memanipulasi
string. di bawah ini adalah contohnya */

// Join, untuk menggabungkan array menjadi string
var_dump(join(",", [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));

// explode, untuk memecah string menjadi array
var_dump(explode(",", "Aditya Lucis Caelum"));

// strtolower, untuk mengubah string menjadi lowercase
var_dump(strtolower("ADITYA LUCIS CAELUM"));

// strtoupper, untuk mengubah string menjadi to upper
var_dump(strtoupper("aditya lucis caelum"));

// trim, untuk menghapus whitespace di depan dan belakang string
var_dump(trim("    Aditya  "));

// substring, untuk mengambil index pada string
var_dump(substr("Aditya Lucis Caelum", 0, 4));