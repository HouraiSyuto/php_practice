<?php
$fruits = array(
    'apple' => array(
        'price' => 100,
        'count' => 2,
    ),
    'banana' => array(
        'price' => 80,
        'count' => 5,
    ),
    'orange' => array(
        'price' => 90,
        'count' => 3,
    ),
);

foreach ($fruits as $name => $value) {
    echo "$name は 1つ {$value['price']} 円で、 {$value['count']}個です", PHP_EOL;
}