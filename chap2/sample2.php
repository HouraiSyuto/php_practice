PHP　スクリプトを実行します

<?php

$a = 1;
$b = "foo bar";
$c = array(1,2,3);

var_dump($a);   //整数
//  int(1)

var_dump($b);   //文字列は、文字列の長さとその中身が出力される
// string(7) "too bar"

var_dump($c);   //配列は、要素数、キー、値が出力される

var_dump($a == $b); //演算の評価数
?>




