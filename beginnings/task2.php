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
    $twinkle = 'Twinkle';
    $star = 'star';

    echo "$twinkle, $twinkle little $star.";
?>
<br>
<?= "$twinkle, $twinkle little $star, and other ${star}s too."; ?>
<br>
<?= "${star}s" ?>
<br>
<?php

$bat = 'bat';
$bat1 = 'Bat';
$wing = 'wing';
$mammal = 'mammal';
echo <<<INFO
${bat1}s are the only ${mammal}s capable of true flight. 
With extremely elongated fingers and a $wing membrane stretched between, 
the ${bat}’s ${wing}s anatomically resemble the human hands. 
Almost 1,000 $bat species can be found worldwide. 
In fact, ${bat}s make up a quarter of all $mammal species on earth!
INFO;

?>
</body>
</html>

