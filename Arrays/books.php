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

//$books = array_filter($books, function ($book) {
//    if (is_array($book['tags']) && (in_array('php', $book['tags']))) {
//        return true;
//    }
//    return false;
//});

//$books = array_filter($books, function ($book) {
//    return $book['price'] >= 20 && $book['price'] < 30 ? true : false;
//});

$books = array_map(function ($book) {
    $book['name'] = preg_replace('/php/i', 'PHP', $book['name']);
    return $book;
}, $books);

?>
<table style="border: 1px solid">
    <?php
    foreach ($books as $book) { ?>
        <tr>
            <td style="border: 1px solid">
                <?= $book['name'] ?> <br />
                <?= $book['author'] ?> <br />
                <?php if (is_array($book['tags'])) {
                    echo implode(', ', $book['tags']) . '<br />';
                };
                ?>
            </td>
            <td style="border: 1px solid">
                <?= $book['price'] ?>
            </td>
        </tr>
    <?php } ?>

</table>