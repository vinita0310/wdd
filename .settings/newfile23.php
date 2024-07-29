<?php
function displayCopyrightInfo() {
    $currentYear = date("Y");
    $startingYear = 2021;
    if ($currentYear == $startingYear) {
        $yearRange = $currentYear;
    } else {
        $yearRange = $startingYear . " - " . $currentYear;
    }
    echo "© " . $yearRange . " Your Company Name. All rights reserved.";
}
displayCopyrightInfo();
?>