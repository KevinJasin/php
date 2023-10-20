<?php

require_once("config.php");
require_once("connect.php");


$id = $_GET["id"];


$stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
$stmt->execute(['id' => $id]);
$book = $stmt->fetch();

$id = $_GET["id"];

?>

<h1>Muuda</h1> <?= $id;?> <?= $book["title"]; ?>
