<?php

require 'functions.php';
//require 'router.php';

// connect to MySQL database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;";
$username = "root";
$password = "My9953";
$pdo = new PDO($dsn, $username, $password);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}