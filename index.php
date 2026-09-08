<?php
$test = array(1, 2, 3);
$test = [1, 2, 3];
$test = [1, 'tauri', true, [1, 2, 3]];
$test = [
    'name' => 'Pauri',
    'age' => '4',
    3,
    'tuhala',
    true,
    100 => 'lol',
    'troll',
];
var_dump($test['name']);
array_push($test, 'added', 'tuhalakiller', 3);
$test[] = 'new wallahi';
$test['name'] = 'Martin';
$test[1] = 9999999;
unset($test[3]);
var_dump($test);