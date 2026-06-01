
<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Future Value Calculator</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
        >
    </head>
    <body class="p-2">
        <h1 class="display-1">Future Value Calculator</h1>
        <form action="DisplayResult.php" method="post">
            <div class="mb-3">
                <label for="principal" class="form-label">Investment Amount</label>
                <input type="number" step="any" id="principal" name="principal" required />
            </div>
            <div class="mb-3">
                <label for="rate" class="form-label">Yearly Interest Rate</label>
                <input type="number" step="any" id="rate" name="rate" required />
            </div>
            <div class="mb-3">
                <label for="years" class="form-label">Number of Years</label>
                <input type="number" id="years" name="years" required />
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
        <!-- Bootstrap JS. -->
        <script
            src=https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js>
        </script>
    </body>
</html>
