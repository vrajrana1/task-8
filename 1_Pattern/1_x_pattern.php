<?php

$num = 10;

for ($i = 0; $i < $num; $i++) {

  for ($j = 0; $j < $num; $j++) {
    if ($i == $j || $i + $j == $num - 1) {
      echo "*";
    } else {
      echo "&nbsp;";
    }
  }
echo "<br>";
}

?>