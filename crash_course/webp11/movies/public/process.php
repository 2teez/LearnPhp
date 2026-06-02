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
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    </head>
    <body class="p-3">
        <main>
            <span>Id = <?= $id ?></span>
            <br />
            <span>Title = <?= $title ?></span>
            <br />
            <span>Price = <?= $price ?></span>
            <br />
            <script
                src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js>
            </script>
        </main>
    </body>
</html>
