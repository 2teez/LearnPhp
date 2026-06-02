<!DOCTYPE html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <title>Movie Form 1</title>
    <link rel="stylesheet"
    href ="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    >
</head>
<body>
    <h1 class="text-center p-3 display-1">Rent a Movie:</h1>
    <form class="text-center" action="/process.php?movieId=80441" method="post">
        <p><label for="number" class="text-start">Credit Card Number:</label>
            <input type="text" id="number" name="number">
        </p>
        <p><label for="date" class="text-start">Expiry Date:</label>
            <input type="text" id="date" name="date">
        </p>
        <p><label for="ccv" class="text-start">CCV Code:</label>
            <input type="text" id="ccv" name="ccv">
        </p>

    <input type="submit" value="Pay and start watching now" name="watchNow" class="btn btn-success">
    <input type="submit" value="Pay and watch later" name="watchLater" class="btn btn-success">
</form>
</body>
</html>
