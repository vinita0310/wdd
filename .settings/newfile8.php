<?php
$people = [
    ["name" => "John", "age" => 25, "city" => "New York"],
    ["name" => "Jane", "age" => 22, "city" => "Los Angeles"],
    ["name" => "Bob", "age" => 28, "city" => "New York"],
    ["name" => "Alice", "age" => 24, "city" => "Chicago"]
];
function deleteElementAndNormalize(&$array, $index) {
    if (isset($array[$index])) {
        array_splice($array, $index, 1);
    }
}
deleteElementAndNormalize($people, 1);
print_r($people);
?>
