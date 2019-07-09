<?php
$int1 = 1;
$int2 = -1;
$int3 = 011;
$int4 = 0xff;
$int5 = PHP_INT_MAX;
$int6 = PHP_INT_MAX + 1;    //整数値の最大値を超えた数は自動的に浮動小数点数型へ

$int7 = intval("1");
$int8 = (int)"1";

echo $int1, PHP_EOL;
echo $int2, PHP_EOL;
echo $int3, PHP_EOL;
echo $int4, PHP_EOL;
echo $int5, PHP_EOL;
echo $int6, PHP_EOL;
echo $int7, PHP_EOL;
echo $int8, PHP_EOL;
