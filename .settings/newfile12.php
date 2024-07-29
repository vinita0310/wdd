<?php
$string = "  Hello,   World!   How are you?   ";
function removeWhitespaces($str) {
    return preg_replace('/\s+/', '', $str);
}
$cleanedString = removeWhitespaces($string);
echo "Original string: '" . $string . "'\n";
echo "String without whitespaces: '" . $cleanedString . "'\n";
?>
