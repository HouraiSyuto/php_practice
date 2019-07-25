<?php
# ABC133 - A - T or T
# 文字列の入力
fscanf(STDIN, "%s", $s);

if(preg_match("/^([0-9]{4})$/", $s)){
  echo "Yes", PHP_EOL ;
}
?>