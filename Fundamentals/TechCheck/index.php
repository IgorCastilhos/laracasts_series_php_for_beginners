<?php

$businesses = [
    'name' => 'Athenas',
    'cost' => 100,
    'categories' => ["Fitness", "Health", "Strength"],
];

//if ($businesses['cost'] > 85) {
//    echo 'Muito caro' . PHP_EOL;
//}

//foreach ($businesses['categories'] as $category) {
//    echo $category . PHP_EOL . "<br/>";
//}

require "index.view.php";
