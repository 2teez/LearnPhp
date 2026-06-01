
<?php
// get the data from the cli
$investment = userInput("Enter the investment amount: ");
$interest_rate = userInput("Enter the interest rate: ");
$years = intval(userInput("Enter the number of years: "));
if ($investment <= 0) {
    echo "Investment amount must be greater than 0.\n";
    $investment = userInput("Enter the investment amount: ");
} elseif ($interest_rate <= 0) {
    echo "Interest rate must be greater than 0.\n";
    $interest_rate = userInput("Enter the interest rate: ");
} elseif ($years <= 0 || $years > 30) {
    echo "Number of years must be greater than 0 and less than or equal to 30.\n";
    $years = userInput("Enter the number of years: ");
}

// using for-loop to calculate compound interest
for ($i = 0; $i < $years; $i++) {
    $investment *= 1 + $interest_rate / 100;
}

echo "Final investment amount: " . $investment . "\n";

// get user input using function
function userInput(string $prompt = "Enter a value: "): float
{
    $result = null;
    do {
        echo $prompt;
        $result = readline();
        if (!is_numeric($result)) {
            echo "Invalid input. Please enter a numeric value.\n";
        }
    } while (!is_numeric($result));
    return floatval($result);
}

