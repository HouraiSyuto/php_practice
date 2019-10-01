<?php
# 整数の入力
fscanf(STDIN, "%d", $b);

for ($q = 2; ; ) {
  $b = $b * $b;
  if ($q > 1000) {
      break;
  }
  $q++;
}

echo $b." \n";
echo pow(2, 8)." \n";
?>