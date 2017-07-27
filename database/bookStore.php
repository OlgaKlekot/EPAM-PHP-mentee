<?php
include 'bookDB.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>books searching</title>
    <style>
        form {

        }
        input:not([type="submit"]) {
            display: inline-block;
            margin: 5px 0;
            width: 200px;
        }
        table, td {
            border: 1px solid;
        }
        td {
            font-weight: bold;
            line-height: 30px;
            padding: 0 10px;
        }
        .bookName {
            line-height: 40px;
            font-size: 20px;
        }
        header {
            width: 600px;
            margin: 15px 0;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }
    </style>
</head>
<body>
<header>
    <form>
        <input placeholder="Enter a book name" required name="title" />
        <input type="submit" value="Search">
    </form>
    <form class="add" action="bookAdd.php">
        <input type="submit" name="Add" value="Add a book">
    </form>
</header>
<table>
    <?php foreach ($books as $book): ?>
        <tr>
            <td>
                <span class="bookName"><?= $book['name'] ?> </span><br />
                Author: <a href="?author=<?= $book['author'] ?>"> <?= $book['author'] ?> </a><br />
                <?php if (!empty($book['t_name'])): ?>
                    Tags:
                    <?php $tags = explode(', ', $book['t_name']); ?>
                    <?php foreach ($tags as $tag): ?>
                        <a href="?tag=<?= $tag ?>"><?= $tag ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
                <br />
            </td>
            <td>
                $<?= is_int($book['price']) ? sprintf('%.02f', $book['price']) : $book['price']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php if (!empty($_GET)): ?>
    <form method="post" action="bookStore.php">
        <input type="submit" name="back" value="back">
    </form>
<?php endif; ?>

</body>
</html>
