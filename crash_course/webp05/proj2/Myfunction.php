<?php
function whichIsSmaller(int $a, int $b): int
{
    return $a < $b ? $a : $b;
}

function whichIsLarger(int $a, int $b): int
{
    // take off the else part
    // of the if/else statement
    $result = $a;
    if ($b > $a) {
        $result = $b;
    }
    return $result;
}
?>
