<?php
    $num = 5;

    for ($i = 1; $i <= $num; $i++) {
        for ($j = $num; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 0; $k < $i * 2 - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = 1; $i <= $num - 1; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = ($num - $i) * 2 - 1; $k > 0; $k--) {
            echo "*";
        }
        echo "<br>";
    }
?>