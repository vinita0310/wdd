<?php
$people = [
    ["name" => "John", "age" => 25, "city" => "New York"],
    ["name" => "Jane", "age" => 22, "city" => "Los Angeles"],
    ["name" => "Bob", "age" => 28, "city" => "New York"],
    ["name" => "Alice", "age" => 24, "city" => "Chicago"]
];
$key = "age";
function compareByKey($a, $b) {
    global $key;
    if ($a[$key] == $b[$key]) {
        return 0;
    }
    return ($a[$key] < $b[$key]) ? -1 : 1;
}
usort($people, "compareByKey");
foreach ($people as $person) {
    echo "Name: " . $person["name"] . ", Age: " . $person["age"] . ", City: " . $person["city"] . "\n";
}
?>