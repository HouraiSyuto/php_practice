<?php
# ABC133 - A - T or T

fscanf(STDIN, "%d %d %d", $a, $b, $c);

$d = $a * $b;

if ($d < $c){
  echo $d, PHP_EOL ;
}else{
  echo $c, PHP_EOL ;
}
?>