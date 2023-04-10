<?php
require_once '../config/connect.php';
print_r($_POST);
$id_post = $_POST['id_post'];
$author = $_POST['author'];
$text = $_POST['text'];
print_r($id_post);

mysqli_query($connect, "INSERT INTO `comments` (`id`, `id_post`, `author` ,`text`) VALUES (NULL, '$id_post', '$author','$text');");

header("location: /single.php?id=$id_post");
