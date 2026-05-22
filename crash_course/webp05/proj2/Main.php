<?php
require_once __DIR__ . "/Myfunction.php";

$result = whichIsSmaller(5, 2);
print "\nthe smaller of 5 and 2 = " . $result;

$result = whichIsLarger(22, 5);
print "\nthe larger of 22 and 5 = " . $result . PHP_EOL;
?>
