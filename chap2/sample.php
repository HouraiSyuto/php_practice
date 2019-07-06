PHP　スクリプトを実行します

<?php
/*
 *サンプルのPHPスクリプトです
 */

$number = rand(); //乱数を取得します
if ($number % 2 == 0 ){
    echo $number, "は偶数です。", PHP_EOL;
}
else{
    echo $number,"は奇数です。", PHP_EOL;
}
?>
PHP スクリプトおわり。
<?php
// ... ライブラリ本体

?>

<?php
echo "コメントアウトのテストです。", PHP_EOL; //この部分がコメントです
# これもコメントです。 ?>この部分は出力されます
<?php
/*
    ここはブロックコメントです
 */
echo "コメントアウトのテストです",PHP_EOL;
?>
<?php
 echo "終了タグは省略できます。", PHP_EOL;




