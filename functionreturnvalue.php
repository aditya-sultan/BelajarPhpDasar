<?php
/* secara default, function tidak bisa mengembalikan nilai
tapi dengan function return value, kita bisa melakukannya */

function sum(int $x, int $y): int
{
    $z = $x * $y;
    return $z;
}

$ttotal = sum(10, 10);
var_dump($ttotal);

//membuat function return value ke dalam kondisi
function getfinalvalue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } elseif ($value >= 40) {
        return "E";
    } else {
        return "F";
    }
}

$score = getfinalvalue(100);
echo "Nilai kamu $score";

// return type declaration
// bila kita ingin mendeklarasikan tipe data apa yang akan kita kembalikan ke dalam function

/*
function sum(int $x, int $y): int
{
    $z = $x * $y;
    return $z;
}

$ttotal = sum(10, 10);
var_dump($ttotal);


function getfinalvalue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } elseif ($value >= 40) {
        return "E";
    } else {
        return "F";
    }
}

$score = getfinalvalue(100);
echo "Nilai kamu $score";

*/