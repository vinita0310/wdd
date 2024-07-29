<?php
$array1 = [
    ["apple", "banana", "cherry"],
    ["date", "elderberry", "fig"]
];
$array2 = [
    ["grape", "honeydew", "kiwi"],
    ["lemon", "mango", "nectarine"]
];
$mergedFirstIndex = array_merge($array1[0], $array2[0]);
$resultArray = [$mergedFirstIndex];
print_r($resultArray);
?>
