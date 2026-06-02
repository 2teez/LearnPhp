<?php
if (!isset($title)) {
    $title = "";
}
if (!isset($price)) {
    $price = "";
}
?>
<!DOCTYPE html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <title>Movie Form 1</title>
</head>
<body>
    <h1>Edit Movie</h1>
<form action="/process.php?id=1022" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="<?= htmlspecialchars(
        $title,
    ) ?>">
    <br><br>
    <label for="price">Price:</label>
    <input type="text" id="price" name="price" value="<?= htmlspecialchars(
        $price,
    ) ?>">
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
