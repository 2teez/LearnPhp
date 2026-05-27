<?php
$id = filter_input(INPUT_GET, "id");
$title = filter_input(INPUT_POST, "title");
$price = filter_input(INPUT_POST, "price");
?>
<!DOCTYPE html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <title>Process</title>
</head>
<body>
Id = <?= $id ?>
<br>
Title = <?= $title ?>
<br>
Price = <?= $price ?>

</body>
</html>
