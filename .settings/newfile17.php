<?php
$string = "Hello, World! This is a sample string with numbers 123 and symbols #$%@.";
function removeSpecialCharacters($str) {
    return preg_replace('/[^a-zA-Z0-9 ]/', '', $str);
}
$cleanedString = removeSpecialCharacters($string);
echo "Original string: '" . $string . "'\n";
echo "Cleaned string: '" . $cleanedString . "'\n";
?>