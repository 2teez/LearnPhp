<?php
require_once __DIR__ . "/Myfunction.php";

$result = whichIsSmaller(5, 2);
print "\nthe smaller of 5 and 2 = " . $result;

$result = whichIsLarger(22, 5);
print "\nthe larger of 22 and 5 = " . $result . PHP_EOL;

$spacer = "/";
printStars(1, $spacer);
printStars(5, $spacer);
printStars(9, $spacer);
printStars(13, $spacer);
printStars(1, $spacer);

$result = printStars(1, $spacer);
var_dump($result);

// calling the printTree function
printTree("/");
printTree(" ");

?>
