<?php
include 'addBookToDB.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" name="newBook">
    <div class="box">
        <input name="name" placeholder="Book title"><br />
        <input name="author" placeholder="Author name"><br />
        <input name="price" placeholder="Book price"><br />
        <input name="tag" placeholder="Tag"><br />
    </div>
    <input type="submit" value="Submit">
</form>
<form action="bookStore.php">
    <input type="submit" name="main" value="Back to Store">
</form>
</body>
</html>