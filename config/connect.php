<?php
$connect = mysqli_connect('localhost', 'root', '', 'sparrow_db');
if (!$connect) {
    die('Mistake connect DB');
}
