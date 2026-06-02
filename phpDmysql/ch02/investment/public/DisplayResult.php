<?php

// collect data from text input types
$principal = filter_input(INPUT_POST, "principal", FILTER_VALIDATE_FLOAT);
$rate = filter_input(INPUT_POST, "rate", FILTER_VALIDATE_FLOAT);
$years = filter_input(INPUT_POST, "years", FILTER_VALIDATE_INT);

// check the collected data
if ($principal === false) {
    $errorMessage = "Principal Amount must be a valid amount.";
} elseif ($principal <= 0) {
    $errorMessage = "Principal Amount must be a positive amount.";
} elseif ($rate === false) {
    $errorMessage = "Interest Rate must be a valid amount.";
} elseif ($rate <= 0) {
    $errorMessage = "Interest Rate must be a positive amount.";
} elseif ($years === false) {
    $errorMessage = "Years must be a valid amount.";
} elseif ($years <= 0 || $years > 31) {
    $errorMessage =
        "Years must be a positive amount and less than or equal to 31.";
} else {
    $errorMessage = "";
}

if (!empty($errorMessage)) {
    include "index.php";
    exit();
}

$principalFormatted = "£" . number_format($principal, 2);
$rateFormatted = "£" . number_format($rate, 2);
$futureValueFormatted =
    "£" . number_format($principal * pow(1 + $rate, $years), 2);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Future Value Calculator</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
        >
    </head>
    <body class="p-2">
        <main>
            <h1 class="display-1">Future Value Calculator</h1>
            <label for="principal">Investment Amount:</label>
            <span id="principal"><?= $principalFormatted ?></span><br />
            <label for="rate">Rate:</label>
            <span id="rate"><?= $rateFormatted ?></span><br />
            <label for="years">Years:</label>
            <span id="years"><?= $years ?></span><br />
            <label for="futureValue">Future Value:</label>
            <span id="futureValue"><?= $futureValueFormatted ?></span><br />
        </main>
        <!-- Bootstrap JS. -->
        <script
            src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js>
        </script>
    </body>
</html>
