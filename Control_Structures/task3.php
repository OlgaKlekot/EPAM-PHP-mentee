<?php
$n = 1;
for ($i = 1; $i <= 12; $i++) {
    $square = pow($i,2);
    echo $n . ') ' . $i . ' * ' . $i . ' = ' . $square . '<br>';
    $n++;
}

?>