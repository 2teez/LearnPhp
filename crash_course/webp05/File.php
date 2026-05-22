<?php
function printNumbers(string $num = "456", string $line = ""): void
{
    print "$num$line";
}

function whichIsLarger(int|float $a, int|float $b): int|float|null
{
    $result = null;
    if ($a > $b) {
        $result = $a;
    } elseif ($b > $a) {
        $result = $b;
    } else {
        $result = null;
    }
    return $result;
}

function printResult(int|float|null $result): string
{
    if (!is_null($result)) {
        return "$result";
    } else {
        return "null";
    }
}
?>
