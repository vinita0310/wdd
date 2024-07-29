<?php
$strings = ["apple", "banana", "cherry", "date", "elderberry", "fig", "grape"];
function getShortestAndLongestLengths($array) {
    if (empty($array)) {
        return ["shortest" => 0, "longest" => 0];
    }
    $lengths = array_map('strlen', $array);
    $shortestLength = min($lengths);
    $longestLength = max($lengths);

    return ["shortest" => $shortestLength, "longest" => $longestLength];
}
$result = getShortestAndLongestLengths($strings);
echo "Shortest string length: " . $result["shortest"] . "\n";
echo "Longest string length: " . $result["longest"] . "\n";
?>
