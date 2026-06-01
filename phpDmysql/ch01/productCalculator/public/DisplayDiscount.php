<?php

//require_once "utils.php";

// get the data from the form
$description = filter_input(INPUT_POST, "description");
$price = floatval(filter_input(INPUT_POST, "price"));
$discount = floatval(filter_input(INPUT_POST, "discount"));

// calculate the discount amount
$discountAmount = $price * ($discount / 100);

// calculate the final price
$finalPrice = $price - $discountAmount;

// display the results
$product_description_escaped = ucfirst(htmlspecialchars($description));
$list_price_formatted = number_format($price, 2);
$discount_percent_formatted = number_format($discount, 2);
$discount_formatted = number_format($discountAmount, 2);
$discount_price_formatted = number_format($finalPrice, 2);
?>
<! DOCTYPE html>
<html>
    <head>
        <title>Product Discount Calculator</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
            <!-- Bootstrap CSS -->
            <link
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
                rel="stylesheet"
            >
    </head>
    <body>
        <main class="p-4">
            <h1 class="display-1">Product Discount Calculator</h1>
            <Label>Product Description:</label>
            <span><?= $product_description_escaped ?></span><br>
            <label>List Price:</label>
            <span><?= $list_price_formatted ?></span><br>
            <label>Standard Discount:</label>
            <span><?= $discount_percent_formatted ?></span><br>
            <label>Discount Amount:</label>
            <span><?= $discount_formatted ?></span><br>
            <label>Discount Price:</label>
            <span><?= $discount_price_formatted ?></span><br>
        </main>
        <!-- Bootstrap JS. -->
        <script
            src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js>
        </script>
    </body>
</html>
