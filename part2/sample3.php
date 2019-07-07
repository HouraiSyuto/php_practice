<?php
$var = 1;
$var_name = "var";
echo $$var_name, PHP_EOL;
// $var_nameが評価され、varという文字列になります。続いて、varという識別子をもつ変数、$varが評価され1になります。

$array = array(1,2,3,4,5);  // $arrayはすべてグローバルスコープからアクセス可能です
foreach ($array as $i){     // foreach構文で配列を走査します。
    echo $i, PHP_EOL;
}
echo "Last:", $i, PHP_EOL;  // foreach構文を抜けたあとでも$iはつかえます

$foo = 1;

function some_function(){
    global $foo;
    echo $foo, PHP_EOL;
    $bar = 20;
}

some_function();

echo $foo, PHP_EOL; //1
echo $bar, PHP_EOL; //

