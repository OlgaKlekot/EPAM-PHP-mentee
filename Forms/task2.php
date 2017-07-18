<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        form {
            width: 295px;
        }
        input[type=submit] {
            float: right;
            margin-top: 10px;
        }
        .city {
            color: orangered;
            font-size: larger;
            margin: 5px;
        }
    </style>
</head>
<body>

<?php
$city = $_POST['favoriteCity'];
if (isset($_POST['favoriteCity']) && ($city != null)): ?>

    <h3>Your favorite city is
        <span class="city"><?= $city ?></span>!
    </h3>

<?php else: ?>

    <form method="post" id="formCity">
        <label for="city">Your favorite city: </label>
        <input type="text" id="city" name="favoriteCity" value="">
        <br>
        <input type="submit" name="submit" value="Ok">
    </form>

<?php endif; ?>

</body>
</html>