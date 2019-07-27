<?php
$obj = new stdClass();
$obj->some_member = 1;

$var = 1;
$var_obj = (object)$var;
echo $var_obj->scalar, PHP_EOL;

$array = array(
    'foo' => 2,
    'bar' => 3,
);
$array_obj = (object)$array;
echo $array_obj->bar, PHP_EOL;
