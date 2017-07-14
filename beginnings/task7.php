<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        $whatsit = '';
        echo 'Value is ' . gettype($whatsit) . '.<br>';
        $whatsit = 4.12;
        echo 'Value is ' . gettype($whatsit) . '.<br>';
        $whatsit = true;
        echo 'Value is ' . gettype($whatsit) . '.<br>';
        $whatsit = 78;
        echo 'Value is ' . gettype($whatsit) . '.<br>';
        $whatsit = null;
        echo 'Value is ' . gettype($whatsit) . '.';

    ?>

</body>
</html>
