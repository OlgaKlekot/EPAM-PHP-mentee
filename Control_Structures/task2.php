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
$i = 0;
$abc = 'abc';
while ($i < 9) {
    $i++;
    echo $abc . ' ';
}
echo '<br>';

$xyz = 'xyz';
$j = 0;
do {
    $j++;
    echo $xyz . ' ';
} while ($j < 9);
echo '<br>';

for ($i = 1; $i <= 9; $i++) {
    echo $i . ' ';
}
echo '<br>';

$j = 0;
for ($i = 'A'; $i <= 'F'; $i++) {
    $j++;
    echo $j . '. Item ' . $i . '<br>';
}

?>

</body>
</html>