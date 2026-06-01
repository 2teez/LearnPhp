<?php
$firstName = ucfirst(filter_input(INPUT_GET, "firstName") ?? "Stranger");
$lastName = ucfirst(filter_input(INPUT_GET, "lastName") ?? "");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title></title>

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
        >
    </head>
    <body>
        <h2 class="display-2">Welcome</h2>
        <div id="show" class="p-3">
            <p>First Name: <?= $firstName ?></p>
            <p>Last Name: <?= $lastName ?></p>
        </div>
        <!-- Bootstrap JS. -->
        <script
            src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js>
        </script>
    </body>
</html>
