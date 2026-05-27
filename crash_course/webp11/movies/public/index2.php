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
    <h1>Rent a Movie:</h1>
<form action="/process.php?movieId=80441" method="post">
    <p><label for="number">Credit Card Number:</label>
        <input type="text" id="number" name="number">
    </p>
    <p><label for="date">Expiry Date:</label>
        <input type="text" id="date" name="date">
    </p>
    <p><label for="ccv">CCV Code:</label>
        <input type="text" id="ccv" name="ccv">
    </p>

    <input type="submit" value="Pay and start watching now" name="watchNow" class="btn btn-success">
    <input type="submit" value="Pay and watch later" name="watchLater" class="btn btn-success">
</form>
</body>
</html>
