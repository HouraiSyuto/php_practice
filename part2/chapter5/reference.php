<?php

$a = 10;
$ref =& $a;
$ref = 20;
echo $a, PHP_EOL;