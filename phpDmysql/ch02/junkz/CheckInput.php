
<?php
// get the data from the cli
$investment = userInput("Enter the investment amount: ");
$interest_rate = userInput("Enter the interest rate: ");
$years = userInput("Enter the number of years: ");

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

