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
            width: 345px;
        }
        input[type=text] {
            padding-left: 10px;
        }
        input[type=submit] {
            float: right;
            margin-top: 5px;
        }
        p {
            font-size: 20px;
        }
        .day {
            color: orangered;
        }
    </style>
</head>
<body>
    <p>

<?php
if (isset($_POST['today'])) {
    $day = ucfirst($_POST['today']);
    $daySpan = 'Laugh on <span class="day">' . $day . '</span>,';

    if ($day == 'Monday') { ?>
    <?= $daySpan ?> laugh for danger.

<?php } elseif ($day == 'Tuesday') { ?>
    <?= $daySpan ?> kiss a stranger.

<?php } elseif ($day == 'Wednesday') { ?>
    <?= $daySpan ?> laugh for a letter.

<?php } elseif ($day == 'Thursday') { ?>
    <?= $daySpan ?> something better.

<?php } elseif ($day == 'Friday') { ?>
    <?= $daySpan ?> laugh for sorrow.

<?php } elseif ($day == 'Saturday') { ?>
    <?= $daySpan ?> joy tomorrow.

<?php } elseif ($day == 'Sunday') { ?>
    Come tomorrow =)

<?php } else { ?>
        Incorrectly!

<?php }

} else { ?>

    <form method="post" id="formDay">
        <label for="day">Enter a day of the week! </label>
        <input type="text" id="day" name="today">
        <br>
        <input type="submit" name="submit" value="Ok">
    </form>

<?php } ?>

    </p>
</body>
</html>