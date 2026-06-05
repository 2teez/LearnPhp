<?php
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";
$isValid = true;
$errorMessage = [];

$age = "";
$emailAddress = "";

if ($isSubmitted) {
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $emailAddress = trim(filter_input(INPUT_POST, "email") ?? "");

    if ($age === false) {
        $isValid = false;
        $errorMessage[] = "Age must be a valid integer.";
    } elseif ($age <= 0) {
        $isValid = false;
        $errorMessage[] = "Age must be greater than zero.";
    }

    if (empty($emailAddress) || !validateEmail($emailAddress)) {
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
        <title>Age Validator</title>

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
        >
    </head>
    <body class="p-3">
        <div class="container">
            <h1 class="mb-4 display-4">Age Validator</h1>
            <div class="mb-3">
                <?php if ($isSubmitted && !$isValid): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errorMessage as $message): ?>
                            <li><?= htmlspecialchars($message) ?></li>
                        <?php endforeach; ?>
                    </ul>
                 </div>
                 <?php else: ?>
                 <div class="alert alert-success">
                     <p><?php
                     $presentAge = intval($age);
                     $age = $presentAge + 1;
                     echo "My present age is " .
                         $presentAge .
                         " and my age next year will be " .
                         $age;
                     ?></p>
                 </div>
                 <?php endif; ?>
            </div>
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
