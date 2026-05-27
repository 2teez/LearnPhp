<?php
$firstName = filter_input(INPUT_POST, "name");
//$age = filter_input(INPUT_POST, "age");
$firstName =
    empty($firstName) || is_null($firstName) ? "Stranger" : ucfirst($firstName);
?>
<!DOCTYPE html lang="en">
<html>
<meta charset="utf-8">
<head>
    <title>Sample Form</title>
</head>
<body>
    Hello, <?= $firstName ?>
</body>
</html>
