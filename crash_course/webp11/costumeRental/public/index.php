<?php
$superhero = filter_input(INPUT_GET, "hero") ?? ""; ?>
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
    <body class="container p-3">
        <form action="costumeRental.php" method="GET">
                <div class="mb-3">
                    <label for="name">Super Hero Costume: </label>
                    <input type="text" id="name" name="hero" value="<?= htmlspecialchars(
                        $superhero,
                    ) ?>" required>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Submit">
                </div>
        </form>
        <!-- Bootstrap JS. -->
        <script
            src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js>
        </script>
    </body>
</html>
