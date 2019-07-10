<?php
// stringcast.php
if(!isset($argv[1])){
    exit;
}
$num = $argv[1];
if($num === 100){
    echo "num is 100", PHP_EOL;
} else{
    echo "num is not 100", PHP_EOL;
}
