<?php
// for loop with continue
for ($i = 1; $i <= 21; $i++) {
    if (!multipleOf3($i)) {
        continue;
    }
    print "$i ";
}
print PHP_EOL;

do {
    $password = trim(readline("Enter new password (atleast 8 characters): "));
} while (strlen($password) < 8);

print "Password accepted: $password\n";
// using a while loop
while (true) {
    $input = trim(readline("Enter input (type 'exit' or 'quit' to stop): "));
    if ($input === "exit" || $input === "quit") {
        break;
    }
    print "You entered: $input\n";
}

$message = "Go to the market and buy the following: ";
print "$message\n";
$listLength = 3;
for ($i = 0; $i < $listLength; $i++) {
    $item = trim(readline("Enter item " . ($i + 1) . ": "));
    if ($i == 0) {
        $message = joinStrings($message, $item);
    } elseif ($i == $listLength - 1) {
        $message = joinStrings($message, $item, delimiter: ", and ");
    } else {
        $message = joinStrings($message, $item, delimiter: ", ");
    }
}

print $message . "\n";

function joinStrings(
    string $str1,
    string $str2,
    string $delimiter = " ",
): string {
    return $str1 . $delimiter . $str2;
}

function multipleOf3(int $of): bool
{
    return $of % 3 === 0;
}

?>
