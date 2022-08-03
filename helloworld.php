<?php
$nama = "Sultan Aditia";
$nim = 311910170;
$prodi = "Teknik Informatika";
$nilai = 100;

echo "Data Mahasiswa" . PHP_EOL;
echo "Nama : " . $nama . PHP_EOL;
echo "NIM : " . $nim . PHP_EOL;
echo "Prodi : " . $prodi . PHP_EOL;
if ($nilai >= 85) {
    echo "Nilai : A";
} else if ($nilai >= 75) {
    echo "Nilai : B";
} else if ($nilai >= 65) {
    echo "Nilai : C";
} else if ($nilai >= 55) {
    echo "Nilai : D";
} else if ($nilai >= 45) {
    echo "Nilai : E";
} else {
    echo "Mungkin Salah Jurusan";
}