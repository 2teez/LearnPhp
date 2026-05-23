<?php

// 1
$colors = ["red", "green", "blue", "yellow", "purple"];
for ($i = 0; $i < count($colors); $i++) {
    print $colors[array_rand($colors, 1)] . "\n";
}

// 2
foreach ($colors as $key => $value) {
    print "color $key = " . $value . "\n";
}

// 3
$lastElement = array_pop($colors);
print "last element = " . $lastElement . "\n";
var_dump($colors);

// 4
$ages = [23, 31, 55];
print "Sum of ages = " . array_sum($ages) . "\n";
print implode(", ", $ages) . "\n";
print "Average age = " . array_sum($ages) / count($ages) . "\n";
?>
