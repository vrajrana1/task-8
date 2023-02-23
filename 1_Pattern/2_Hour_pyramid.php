<?php
$num =5;
for ($i = $num; $i > 0; $i--) {
    for ($k = $num; $k > $i; $k--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "*&nbsp;&nbsp;";
    }
echo "<br/>";
}
for ($i = 1; $i < $num; $i++){
    for($k = $num-1; $k > $i; $k--){
        echo "&nbsp;&nbsp;";
    }
    for($j = 0; $j <= $i; $j++){
        echo "*&nbsp;&nbsp;";
    }
echo "<br/>";
}

?>