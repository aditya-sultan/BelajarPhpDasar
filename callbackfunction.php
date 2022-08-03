<?php
// callback function

function introduce(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "My name is $finalName" . PHP_EOL;
}

introduce("Aditya Lucis Caelum", "strtoupper");
introduce("Aditya Lucis Caelum", function (string $name): string {
    return strtoupper($name);
});
introduce("Aditya", fn ($name) => strtoupper($name));