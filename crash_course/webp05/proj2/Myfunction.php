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

function printTree(string $spacer): void
{
    for ($i = 1; $i <= 13; $i += 4) {
        printStars($i, $spacer);
    }
    printStars(1, $spacer);
}

function stringToInt(string $str): ?int
{
    return match ($str) {
        "one" => 1,
        "two" => 2,
        "three" => 3,
        "four" => 4,
        "five" => 5,
        "six" => 6,
        default => null,
    };
}

function printConvertedInt(?int $num): string
{
    return $num !== null
        ? (string) $num
        : "sorry no number conversion possible";
}

?>
