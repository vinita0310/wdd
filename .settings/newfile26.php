<?php
$array1 = ["apple", "banana", "cherry"];
$array2 = ["dog", "elephant", "fox", "giraffe"];
function mergeArraysByIndex($arr1, $arr2) {
    $mergedArray = [];
    $maxLength = max(count($arr1), count($arr2));

    for ($i = 0; $i < $maxLength; $i++) {
        if (isset($arr1[$i])) {
            $mergedArray[] = $arr1[$i];
        }
        if (isset($arr2[$i])) {
            $mergedArray[] = $arr2[$i];
        }
    }

    return $mergedArray;
}

$mergedArray = mergeArraysByIndex($array1, $array2);
print_r($mergedArray);
?>