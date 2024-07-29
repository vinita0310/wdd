<?php
function getStartAndEndDate($week, $year) {
    if ($week < 1 || $week > 53) {
        return false;
    }
    $startDate = new DateTime();
    $startDate->setISODate($year, $week);
    $start = $startDate->format('Y-m-d');
    $endDate = clone $startDate;
    $endDate->modify('+6 days');
    $end = $endDate->format('Y-m-d');

    return ["start" => $start, "end" => $end];
}
$week = 30;
$year = 2024;
$result = getStartAndEndDate($week, $year);
if ($result) {
    echo "Week $week of $year starts on: " . $result["start"] . "\n";
    echo "Week $week of $year ends on: " . $result["end"] . "\n";
} else {
    echo "Invalid week number.\n";
}
?>