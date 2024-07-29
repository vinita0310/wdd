<?php
$people = [
    ["name" => "John", "age" => 25, "city" => "New York"],
    ["name" => "Jane", "age" => 22, "city" => "Los Angeles"],
    ["name" => "Tom", "age" => 24, "city" => "New York"]
];
$criteria = ["age" => 24, "city" => "New York"];
function searchByCriteria($array, $criteria) {
    return array_filter($array, function($item) use ($criteria) {
        foreach ($criteria as $key => $value) {
            if (!isset($item[$key]) || $item[$key] != $value) {
                return false;
            }
        }
        return true;
    });
}
$results = searchByCriteria($people, $criteria);
if (!empty($results)) {
    echo "Matching records:\n";
    foreach ($results as $result) {
        echo "Name: " . $result["name"] . ", Age: " . $result["age"] . ", City: " . $result["city"] . "\n";
    }
} else {
    echo "No matching records found.\n";
}
?>