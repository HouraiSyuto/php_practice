<?php

function array_pass($array){
    $array[0] *= 2;
    $array[1] *= 2;
}

function array_pass_ref(&$array){
    $array[0] *= 2;
    $array[1] *= 2;
}

$a = 10;
$b = 20;

$array = array($a, $b);
array_pass_ref($array);

echo $a, PHP_EOL;
echo $b, PHP_EOL;

$array = array($a, &$b);
array_pass($array);

echo $a, PHP_EOL;
echo $b, PHP_EOL;