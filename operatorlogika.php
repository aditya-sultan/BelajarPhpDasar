<?php
// And, true jika keduanya true
echo "Operator Logika And: " . PHP_EOL;
var_dump(true && true);
var_dump(true && false);
echo "\n";

// Or, true jika salah satu atau keduanya true
echo "Operator Logika Or: " . PHP_EOL;
var_dump(true || true);
var_dump(true || false);
echo "\n";

// not, kebalikan dari nilai boolean
echo "Operator Logika Not: " . PHP_EOL;
var_dump(!true);
var_dump(!false);
echo "\n";

// Xor, true jika salah satu true, tapi tidak keduanya
echo "Operator Logika Xor: " . PHP_EOL;
var_dump(true xor true);
var_dump(true xor false);
echo "\n";