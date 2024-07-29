<?php
function isPalindrome($string) {
    $cleanedString = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $string));
    $reversedString = strrev($cleanedString);
    return $cleanedString === $reversedString;
}
$testString1 = "A man, a plan, a canal, Panama";
$testString2 = "Hello, World!";
$testString3 = "racecar";
echo $testString1 . " is " . (isPalindrome($testString1) ? "" : "not ") . "a palindrome.\n";
echo $testString2 . " is " . (isPalindrome($testString2) ? "" : "not ") . "a palindrome.\n";
echo $testString3 . " is " . (isPalindrome($testString3) ? "" : "not ") . "a palindrome.\n";
?>
