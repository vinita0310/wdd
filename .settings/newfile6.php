<?php
$number = 12345;
$numberString = strval($number);
for ($i = 0; $i < strlen($numberString); $i++) {
    echo $numberString[$i] . "\n";
}
?>