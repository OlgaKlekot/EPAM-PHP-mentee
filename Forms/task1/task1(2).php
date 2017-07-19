<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        .city {
            color: orangered;
            font-size: larger;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php
    if (isset($_POST['favoriteCity'])) {
        $city = $_POST['favoriteCity'];
?>
    <h3>Your favorite city is
        <span class="city"><?= $city ?></span>!
    </h3>
<?php
    };
?>

</body>
</html>