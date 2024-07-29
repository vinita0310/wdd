<?php
function getRandomFloat($min = 0, $max = 1, $precision = 2) {
    $precision = max(0, (int)$precision);
    $randomFloat = $min + mt_rand() / mt_getrandmax() * ($max - $min);
    return round($randomFloat, $precision);
}
$min = 1.5;
$max = 10.5;
$precision = 3;
$randomFloat = getRandomFloat($min, $max, $precision);
echo "Random float number between $min and $max with $precision decimal places: " . $randomFloat . "\n";
?>