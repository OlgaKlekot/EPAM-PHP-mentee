<?php
$books = [
    [
        'name' => 'Learning php, mysql & JavaScript',
        'author' => 'Robin Nixon',
        'price' => 30,
        'tags' => ['php', 'javascript', 'mysql']
    ],
    [
        'name' => 'Php for the Web: Visual QuickStart Guide',
        'author' => 'Larry Ullman',
        'price' => 25,
        'tags' => ['php']
    ],
    [
        'name' => 'pHp and MySqL for Dynamic Web Sites',
        'author' => 'Larry Ullman',
        'price' => 14.39,
        'tags' => ['php', 'mysql']
    ],
    [
        'name' => 'Modern PhP: New Features and Good Practices',
        'author' => 'Josh Lockhart',
        'price' => 24,
        'tags' => ['php']
    ],
    [
        'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'author' => 'Jon Duckett',
        'price' => 20,
        'tags' => ['javascript', 'jquery']
    ],
    [
        'name' => 'Miss Peregrine\'s Home for Peculiar Children',
        'author' => 'Ransom Riggs',
        'price' => 8.18
    ]
];

if (isset($_POST['name'])) {
    array_push($books, $newBook = [
        'name' => $_POST['name'],
        'author' => $_POST['author'],
        'price' => (int)$_POST['price'],
        'tags' => explode(' ', $_POST['tag'])
    ]);
};
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
            margin: 15px 0;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
        }
        input:not([type="submit"]) {
            display: inline-block;
            margin: 5px 0;
            width: 200px;
        }
        input[type="submit"] {
            height: 20px;
            margin: 20px;
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
    </style>
</head>
<body>
<header>
    <form method="post" name="newBook">
        <div class="box">
            <input name="name" placeholder="Book title"><br />
            <input name="author" placeholder="Author name"><br />
            <input name="price" placeholder="Book price"><br />
            <input name="tag" placeholder="Tag"><br />
        </div>
        <input type="submit" value="Submit">
    </form>
</header>
<table>
    <?php foreach ($books as $book): ?>
        <tr>
            <td>
                <span class="bookName"><?= $book['name'] ?> </span><br />
                Author: <a href="?author=<?= $book['author'] ?>"> <?= $book['author'] ?> </a><br />
                <?php if (is_array($book['tags'])): ?>
                    Tags:
                    <?php foreach ($book['tags'] as $tag): ?>
                        <a href="?tag=<?= $tag ?>"><?= $tag ?></a>
                    <?php endforeach; ?>
                <?php endif; ?> <br />
            </td>
            <td>
                $<?= is_int($book['price']) ? sprintf('%d.00', $book['price']) : $book['price']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>