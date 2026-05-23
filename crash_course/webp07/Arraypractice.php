<?php
require_once __DIR__ . "/Func.php";

$animals = ["cat", "dog", "giraffe", "hippo"];
$index = intval(getUserInput("Enter an index of array to delete."));
if (isset($animals[$index])) {
    print "(Removing index $index)";
    unset($animals[$index]);
    var_dump($animals);
} else {
    print "Index not found.\n";
}
?>
