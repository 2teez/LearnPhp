<?php
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";
$isValid = true;
$name = "";
$errorMessage = "";
if ($isSubmitted) {
    $name = filter_input(INPUT_POST, "name");
    if (strlen($name < 3)) {
        $isValid = false;
        $errorMessage = "Invalid - name must contain at least 3 letters";
    }
}

if ($isSubmitted && $isValid) {
    echo "Hello $name";
    die();
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
        <form  method="post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="bg-dark text-white text-center fs-1">
                            <?php if ($isSubmitted && !$isValid): ?>
                                <?= htmlspecialchars($errorMessage) ?>
                                <?php elseif (empty($name)): ?>
                                <?php echo ""; ?>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2">
                        <input type="text" name="name" value="<?= htmlspecialchars(
                            $name,
                        ) ?>">
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
