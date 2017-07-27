<?php

try {
    $DBH = new PDO("mysql:host=localhost;dbname=book_store", 'root', '');
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

}
catch(PDOException $e) {
    echo $e->getMessage();
}

if (isset($_GET['title'])) {
    $STH = $DBH->prepare('SELECT  b.name, b.price, b.author, GROUP_CONCAT(t.name SEPARATOR \', \') t_name FROM  book b  LEFT JOIN book_tag bt ON bt.book_id = b.id LEFT JOIN tag t ON t.id = bt.tag_id WHERE b.name = :name GROUP BY b.id');
    $STH->bindValue(':name', $_GET['title']);
} elseif (isset($_GET['author'])) {
    $STH = $DBH->prepare('SELECT  b.name, b.price, b.author, GROUP_CONCAT(t.name SEPARATOR \', \') t_name FROM  book b  LEFT JOIN book_tag bt ON bt.book_id = b.id LEFT JOIN tag t ON t.id = bt.tag_id WHERE b.author = :author GROUP BY b.id');
    $STH->bindParam(':author', $_GET['author']);
} elseif (isset($_GET['tag'])) {
    $STH = $DBH->prepare('SELECT  b.name, b.price, b.author, GROUP_CONCAT(t.name SEPARATOR \', \') t_name FROM  book b  LEFT JOIN book_tag bt ON bt.book_id = b.id LEFT JOIN tag t ON t.id = bt.tag_id WHERE t.name = :tag GROUP BY b.id');
    $STH->bindValue(':tag', $_GET['tag']);
} else {
    $STH = $DBH->query('SELECT  b.name, b.price, b.author, GROUP_CONCAT(t.name SEPARATOR \', \') t_name FROM  book b  LEFT JOIN book_tag bt ON bt.book_id = b.id LEFT JOIN tag t ON t.id = bt.tag_id GROUP BY  b.id');
};


$STH->setFetchMode(PDO::FETCH_ASSOC);
$STH->execute();
$books = $STH->fetchAll();