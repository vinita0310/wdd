<?php
$dates = [
    "2024-07-20",
    "2023-06-15",
    "2024-01-05",
    "2023-12-25",
    "2024-03-18"
];
function findEarliestAndLatestDates($dates) {
    $timestamps = array_map('strtotime', $dates);
    $earliestTimestamp = min($timestamps);
    $latestTimestamp = max($timestamps);
    $earliestDate = date('Y-m-d', $earliestTimestamp);
    $latestDate = date('Y-m-d', $latestTimestamp);

    return ["earliest" => $earliestDate, "latest" => $latestDate];
}
$result = findEarliestAndLatestDates($dates);
echo "Earliest date: " . $result["earliest"] . "\n";
echo "Latest date: " . $result["latest"] . "\n";
?>
