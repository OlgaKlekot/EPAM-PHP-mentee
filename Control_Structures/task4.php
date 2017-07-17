<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            /*border-collapse: collapse;*/
            margin: 10px;
        }
        td {
            padding: 10px 20px;
            text-align: center;
            border: 2px ridge darkcyan;
            color: indigo;
            font-size: 20px;
            box-shadow: 1.5px 1px lightblue;
        }
        td {
            min-width: 20px;
        }
        tr:first-child, td:first-child {
            background-color: lemonchiffon;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($i = 1; $i <= 9; $i++): ?>

            <tr>
                <td> <?= $i ?> </td>

                <?php
                for ($j = 2; $j <= 9; $j++): ?>

                <td> <?= $j * $i ?> </td>
                <?php endfor; ?>

            </tr>
        <?php endfor; ?>

    </table>
</body>
</html>

