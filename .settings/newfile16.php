<?php
$string = "This is a sample string (with some text) and another (example).";
function extractTextWithinParentheses($str) {
    preg_match_all('/\((.*?)\)/', $str, $matches);
    return $matches[1];
}
$extractedTexts = extractTextWithinParentheses($string);
echo "Original string: '" . $string . "'\n";
echo "Extracted text within parentheses:\n";
foreach ($extractedTexts as $text) {
    echo $text . "\n";
}
?>