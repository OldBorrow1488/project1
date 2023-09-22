<?php
function addNumbers($a, $b) {
    $sum = $a + $b;
    return $sum;
}

$a = 5;
$b = 3;

$result = addNumbers($a, $b);
echo "Сумма чисел $a и $b равна: $result";
?>