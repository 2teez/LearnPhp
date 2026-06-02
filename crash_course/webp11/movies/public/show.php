<?php
$errorMessage = "";

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
if (!$id) {
    $errorMessage = "No id provided";
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
    <body>
        <?php if ($errorMessage): ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php else: ?>
            <div class="text-info">
                <?= "Would show details of item with id = $id here" ?>
            </div>
        <?php endif; ?>
        <!-- Bootstrap JS. -->
        <script
            src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js>
        </script>
    </body>
</html>
