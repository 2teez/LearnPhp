<?php

require_once "Utils.php";

// get the data from the cli
do {
    $investment = userInput("Enter the investment amount: ");
    $interest_rate = userInput("Enter the interest rate: ");
    $years = intval(userInput("Enter the number of years: "));

    $err_msg = "";
    if ($investment <= 0) {
        $err_msg .= "Investment amount must be greater than 0.\n";
    } elseif ($interest_rate <= 0) {
        $err_msg .= "Interest rate must be greater than 0.\n";
    } elseif ($years <= 0 || $years > 30) {
        $err_msg .=
            "Number of years must be greater than 0 and less than or equal to 30.\n";
    }
    echo $err_msg . PHP_EOL;
} while (!empty($err_msg));

// using for-loop to calculate compound interest
for ($i = 0; $i < $years; $i++) {
    $investment *= 1 + $interest_rate / 100;
}

echo "Final investment amount: " . $investment . "\n";

// get user input using function
