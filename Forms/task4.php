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
            width: 260px;
        }
        select {
            padding-left: 5px;
        }
        input[type=submit] {
            float: right;
            margin-top: 5px;
        }
        p, label {
            font-size: 20px;
        }
        select {
            font-size: 18px;
        }
        .day {
            color: orangered;
        }
        #formBack input {
            float: left;
        }
    </style>
</head>
<body>
<p>

    <?php
    $day = $_POST['today'];
    $daySpan = 'Laugh on <span class="day">' . $day . '</span>,';
    if (!isset($_POST['today'])): ?>

<form method="post" id="formDay">
    <label for="day">Choose the day! </label>
    <select name="today" id="day">
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Ok">
</form>

<?php else:
    switch ($day) {
        case 'Monday':
            echo $daySpan . ' laugh for danger.';
            break;
        case 'Tuesday':
            echo $daySpan . ' kiss a stranger.';
            break;
        case 'Wednesday':
            echo $daySpan . ' laugh for a letter.';
            break;
        case 'Thursday':
            echo $daySpan . ' something better.';
            break;
        case 'Friday':
            echo $daySpan . ' laugh for sorrow.';
            break;
        case 'Saturday':
            echo $daySpan . ' joy tomorrow.';
            break;
        case 'Sunday':
            echo $daySpan . 'Come tomorrow =)';
            break;
    }
?>
    <form method="post" id="formBack">
        <input type="submit" name="back" value="back">
    </form>

<?php endif; ?>

</p>
</body>
</html>