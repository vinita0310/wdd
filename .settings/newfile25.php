<?php
// Define a string with various characters
$string = "Hello, World! This is a sample string with numbers 123 and symbols #$%@.";

// Function to remove all characters except a-z, A-Z, 0-9, and spaces
function removeSpecialCharacters($str) {
    // Use preg_replace to keep only specified characters
    return preg_replace('/[^a-zA-Z0-9 ]/', '', $str);
}

// Remove special characters from the string
$cleanedString = removeSpecialCharacters($string);

// Print the result
echo "Original string: '" . $string . "'\n";
echo "Cleaned string: '" . $cleanedString . "'\n";
?>
