<?php
$nilai = "A";

switch ($nilai) {
    case "A":
        echo "Anda Lululus dengan sangat baik" . PHP_EOL;
        break;

    case "B":
    case "C":
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "Mungkin anda salah jurusan" . PHP_EOL;
}