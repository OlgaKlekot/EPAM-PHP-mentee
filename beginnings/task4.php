<?php
$x = 8;
$so = 'Value is now ';
echo $so . $x . '.<br>'
    . 'Add 2. ' . $so . ($x += 2) . '.<br>'
    . 'Subtract 4. ' . $so . ($x -= 4) . '.<br>'
    . 'Multiply by 5. ' . $so . ($x *= 5) . '.<br>'
    . 'Divide by 3. ' . $so . ($x /= 3) . '.<br>'
    . 'Increment value by one. ' . $so . (++$x) . '.<br>'
    . 'Decrement value by one. ' . $so . (--$x) . '.';

?>