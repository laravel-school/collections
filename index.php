<?php

include('Collection.php');

$conn = new PDO("mysql:host=127.0.0.1;dbname=collections", "root", "change-me");

$sql = $conn->query("SELECT * FROM posts WHERE id = 100");
$sql = $conn->query("SELECT * FROM posts");
$getAll = $sql->fetchAll(PDO::FETCH_OBJ);

$all = new Collection($getAll);

var_dump($all->count());
