<?php
// 1
$name = "erlang";
$shortLength = 4;
print strlen($name) < $shortLength
    ? "$name is too short.\n"
    : "$name is enough.\n";

// 2
$laundryWeight = 9;
$standardWeight = 10;
print $laundryWeight > $standardWeight
    ? "Fits in standard machine.\n"
    : "Need medium to large machine.\n";

// 3

$vehicleKind = "helicopter";
// can also use a switch statement instead of a match expression
print match ($vehicleKind) {
    "bus" => "Beep beep!\n",
    "train" => "Run on tracks.\n",
    "helicopter" => "Can fly.\n",
    "bicycle" => "You never forget once you've learned!\n",
    default => "You've chosen the road less travelled.\n",
};

// 4
$userCorrectName = "password";
$passwordCorrect = "87654321";

if ($userCorrectName === $name && $passwordCorrect === $laundryWeight) {
    print "You are now logged in.\n";
} else {
    print "Invalid credentials, please try again.\n";
}
