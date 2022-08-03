<?php
$a = 100;
$b = "100";

// sama dengan
echo "Apakah sama dengan: ";
var_dump($a == $b) . PHP_EOL;
echo "\n";

// identik
echo "Apakah Identik?: ";
var_dump($a === $b) . PHP_EOL;
echo "\n";

// tidak sama dengan
echo "Apakah tidak sama dengan?: ";
var_dump($a != $b) . PHP_EOL;
echo "\n";

// tidak identik
echo "Apakah tidak identik?: ";
var_dump($a !== $b) . PHP_EOL;
echo "\n";

// kurang dari
echo "Apakah kurang dari?: ";
var_dump($a < $b) . PHP_EOL;
echo "\n";

// kurang dari sama dengan
echo "Apakah kurang dari sama dengan?: ";
var_dump($a <= $b) . PHP_EOL;
echo "\n";

// lebih dari
echo "Apakah lebih dari?: ";
var_dump($a > $b) . PHP_EOL;
echo "\n";

// lebih dari sama dengan
echo "Apakah lebih dari sama dengan?: ";
var_dump($a >= $b) . PHP_EOL;