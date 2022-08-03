<?php
// memastikan apakah variabel memiliki nilai atau null

// tanpa null coalescing. hanya menggunakan if statment biasa
// echo "Bila tidak ada alias null";
// echo "\n";

// $data = [];
// if (isset($data['action'])) {
//    $action = $data['action'];
// } else {
//    $action = 'nothing';
// }

// echo $action . PHP_EOL;

// echo "\n";

// echo "Bilai memiliki nilai alias tidak null";
// echo "\n";

// $data1 = [
//    "action" => "Create"
// ];
// if (isset($data1['action'])) {
//    $action = $data1['action'];
// } else {
//    $action = 'nothing';
// }

// echo $action . PHP_EOL;

// dengan null coalescing. tanpa perlu menggunakan if statment
echo "Bila tidak ada alias null";
echo "\n";

$data = [];
$action = $data['action'] ?? 'nothing';

echo $action . PHP_EOL;

echo "\n";

echo "Bilai memiliki nilai alias tidak null";
echo "\n";

$data1 = [
    "action1" => "Create"
];
$action1 = $data1['action1'] ?? 'nothing';

echo $action1 . PHP_EOL;


$degree = [
    "Heat" => "31 degree"
];
$suhu = $degree['Heat'] ?? 'Cold';

echo $suhu;