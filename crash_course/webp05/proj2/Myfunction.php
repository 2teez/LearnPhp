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

function printStars(int $numStars, string $spacer): void
{
    if (empty($spacer)) {
        return;
    }
    $lineLength = 20;
    $starsString = str_repeat("*", $numStars);
    print str_pad($starsString, $lineLength, $spacer, STR_PAD_BOTH) . PHP_EOL;
}

?>
