<?php
require_once __DIR__ . "/Func.php";

$animals = ["cat", "dog", "giraffe", "hippo"];
$index = intval(getUserInput("Enter an index of array to delete."));
if (isset($animals[$index])) {
    print "(Removing index $index)";
    unset($animals[$index]);
    print_r($animals);
} else {
    print "No element in index [$index].\n";
}

// loop thru an array
foreach ($animals as $key => $value) {
    if ($key == array_key_last($animals)) {
        print "and [$key] => $value.\n";
    } else {
        print "[$key] => $value, ";
    }
}
// using implode to join array elements
print implode(", ", $animals) . "\n";
?>
