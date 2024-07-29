<?php
$dates = [
    "2024-07-20",
    "2023-06-15",
    "2024-01-05",
    "2023-12-25",
    "2024-03-18"
];
function compareDates($a, $b) {
    $timestampA = strtotime($a);
    $timestampB = strtotime($b);
    
    if ($timestampA == $timestampB) {
        return 0;
    }
    return ($timestampA < $timestampB) ? -1 : 1;
}
usort($dates, "compareDates");
foreach ($dates as $date) {
    echo $date . "\n";
}
?>
