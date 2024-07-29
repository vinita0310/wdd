<?php
$people = [
    ["name" => "John", "age" => 25, "city" => "New York"],
    ["name" => "Jane", "age" => 22, "city" => "Los Angeles"],
    ["name" => "Bob", "age" => 28, "city" => "New York"],
    ["name" => "Alice", "age" => 24, "city" => "Chicago"],
    ["name" => "Tom", "age" => 24, "city" => "New York"]
];
$key = "city";
$value = "New York";
function searchByKeyValue($array, $key, $value) {
    $results = [];
    foreach ($array as $item) {
        if (isset($item[$key]) && $item[$key] == $value) {
            $results[] = $item;
        }
    }
    return $results;
}
$results = searchByKeyValue($people, $key, $value);
if (!empty($results)) {
    echo "Matching records:\n";
    foreach ($results as $result) {
        echo "Name: " . $result["name"] . ", Age: " . $result["age"] . ", City: " . $result["city"] . "\n";
    }
} else {
    echo "No matching records found.\n";
}
?>