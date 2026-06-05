<?php
$errorMessage = "";
if (!isset($_POST["name"])) {
    $name = "";
}

if (strlen($name) < 3) {
    $errorMessage = "invalid - name must contain at least 3 letters.";
}
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
    <body class="p-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="bg-dark text-white text-center fs-1">
                        <?= htmlspecialchars($errorMessage) ?>
                    </span>
                </div>
            </div>
            <form action="validate.php" method="post">
                <div class="row">
                    <div class="col-lg-2">
                        <input type="text" name="name" value="<?= htmlspecialchars(
                            $name,
                        ) ?>" required>
                    </div>
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Bootstrap JS. -->
        <script
            src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js>
        </script>
    </body>
</html>
