<?php
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";
$isValid = true;
$errorMessage = [];
$age = 0;
$emailAddress = "";
if ($isSubmitted) {
    $age = intval(filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT));
    $emailAddress = filter_input(INPUT_POST, "email");

    if ($age <= 0) {
        $isValid = false;
        $errorMessage[] = "Age can't be Zero, or Negative.";
    } elseif (empty($emailAddress) || !validateEmail($emailAddress)) {
        $isValid = false;
        $errorMessage[] = "Invalid email address.";
    }
}

function validateEmail($emailAddress)
{
    return filter_var($emailAddress, FILTER_VALIDATE_EMAIL) !== false;
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
            <?php if ($isSubmitted && !$isValid) {
                foreach ($errorMessage as $message) { ?>
                    <div class="alert alert-danger">
                        <ul>
                            <li><?= htmlspecialchars($message) ?></li>
                        </ul>
                    </div>
            <?php }
            } else {
                 ?>
                <div class="alert alert-success"><?php
                $presentAge = $age;
                $age = $presentAge + 1;
                echo "My present Age is: " .
                    htmlspecialchars($presentAge) .
                    ". And My Next Age will be: " .
                    htmlspecialchars($age);
                ?></div>
            <?php
            } ?>
            <form method="post">
                <div class="mb-3">
                    <label for="age">Age: </label>
                    <input type="text" id="age" name="age" value="<?= htmlspecialchars(
                        $age,
                    ) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email: </label>
                    <input type="text" id="email" name="email" value="<?= htmlspecialchars(
                        $emailAddress,
                    ) ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <!-- Bootstrap JS. -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
        </script>
    </body>
</html>
