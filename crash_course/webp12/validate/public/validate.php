<?php
$name = filter_input(INPUT_POST, "name") ?? ""; ?>
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
    <body class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="bg-white text-dark text-center fs-1">
                        Hello, <?= htmlspecialchars($name) ?>
                    </span>
                </div>
            </div>

        <!-- Bootstrap JS. -->
        <script
            src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js>
        </script>
    </body>
</html>
