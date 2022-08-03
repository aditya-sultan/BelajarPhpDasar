<?php
// factorial menggunakan function loop biasa
function factorialloop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialloop(10));

// factorial menggunakan recursive funtion
function recursivefunction(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * recursivefunction($value - 1);
    }
}

var_dump(recursivefunction(11));