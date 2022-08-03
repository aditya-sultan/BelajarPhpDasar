<?php
// cara menulis tipe data array

$names = ["Aditya", "Lucis", "Caelum"];

/* hapus salah satu array
unset($names[1]);*/

var_dump($names) . PHP_EOL;

// array sebagai map
$Character = [
    "Name" => "Alwyn Galilei",
    "Title" => "Prophessor",
    "Occupation" => "Doctor Scientist",
    "Country" => "Beyazkartal Empire",
    "Likes" => [
        "His Family",
        "Red Color",
        "Aranea",
        "His Friend",
        "Coffee",
        "Pork",
        "Chicken",
        "Beep",
        "Sweat"
    ],
    "Hate" => [
        "Criminal",
        "War",
        "Tragedy"
    ]
];
var_dump($Character);
var_dump($Character["Occupation"]);
echo "He Hate " . ($Character["Hate"][1]) . PHP_EOL;

// cara menulis array didalam array
echo "He Love " . ($Character["Likes"][0]);