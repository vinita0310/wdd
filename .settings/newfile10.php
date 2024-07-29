<?php
$numbers = [10, 20, 30, 40, 50];
function deleteElementAndNormalize(&$array, $index) {
    if (isset($array[$index])) {
       array_splice($array, $index, 1);
    }
}
deleteElementAndNormalize($numbers, 2);
print_r($numbers);
?>
