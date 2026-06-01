<?php

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
