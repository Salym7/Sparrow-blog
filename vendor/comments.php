<?php
// require_once '../config/connect.php';
$dbh = new PDO('mysql:host=localhost;dbname=sparrow_db', 'root', '');

if (count($_POST) > 0) {
    $id_post = trim($_POST['id_post']);
    $author = trim($_POST['author']);
    $text = trim($_POST['text']);

    $id_post = htmlspecialchars($id_post);
    $author = htmlspecialchars($author);
    $text = htmlspecialchars($text);

    if ($id_post != '' && $author != '' && $text != '') {

        $query = $dbh->prepare("INSERT INTO `comments` (`id_post`, `author`, `text`) VALUES (?, ?, ?)");

        $query->bindParam(1, $id_post);
        $query->bindParam(2, $author);
        $query->bindParam(3, $text);

        $query->execute();

        header("location: /single.php?id=$id_post");
    }
}
