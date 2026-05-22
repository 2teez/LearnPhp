<?php
require_once __DIR__ . "/File.php";

// 1
printNumbers("123");
printNumbers();
printNumbers("789", "\n");

// 2 and 3
print printResult(whichIsLarger(4, 5)) . "\n";
print printResult(whichIsLarger(21, 19)) . "\n";
print printResult(whichIsLarger(3, 3)) . "\n";

?>
