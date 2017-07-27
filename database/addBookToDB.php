<?php
include_once 'bookDB.php';

if (!empty($_POST['name'])) {
    $DBH->beginTransaction();
    try {

        $STH = $DBH->prepare('INSERT INTO book (name, price, author) VALUES (:name, :price, :author)');
        $newBook = [
            ':name' => $_POST['name'],
            ':author' => $_POST['author'],
            ':price' => (float)$_POST['price']
            ];
        $STH->execute($newBook);
        $newBookId = $DBH->lastInsertId();

        $STH = $DBH->prepare('INSERT INTO tag (name) VALUES (:tag)');
        $tags = (array)explode(' ', $_POST['tag']);
        $newTagId = [];
            foreach ($tags as $tag) {
                $newTag = [
                ':tag' => $tag
                ];
                $STH->execute($newTag);

                $newTagId[] = $DBH->lastInsertId();
            };

        $STH = $DBH->prepare("INSERT INTO book_tag (tag_id, book_id) VALUES (:newTagId, $newBookId)");
        foreach ($newTagId as $tagId) {
            $newTagIdArr = [
                ':newTagId' => $tagId
            ];
            $STH->execute($newTagIdArr);
        }

        $DBH->commit();
    }


catch(Exception $e) {
        echo $e->getMessage();
        $DBH->rollBack();
    }
};