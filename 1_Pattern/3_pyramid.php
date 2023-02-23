<?php
$num = 5;
for($i=1;$i<=$num;$i++)
{
    for($j=1;$j<=$num-$i;$j++)
    {
        echo "&nbsp;&nbsp;";    
    }
    for($k=1;$k<=$i;$k++)
    {
                echo "*&nbsp;&nbsp;";
    }
echo "<br />";
}


echo "<br/>";
echo "<br/>";
echo "<br/>";


for($i = 0; $i < $num; $i++) {
    for($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for($k = 0; $k < 2 * ($num - $i) - 1; $k++) {
        echo "*";
    }
    echo "<br>";
}


echo "<br/>";
echo "<br/>";
echo "<br/>";


$num = 5;
    for($i = 0; $i < $num; $i++) {
        for($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
}


echo "<br/>";
echo "<br/>";
echo "<br/>";

$num = 5;
for($i = 0; $i < $num; $i++) {
    for($j = 1; $j < $num - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for($k = 0; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
    }
?>
