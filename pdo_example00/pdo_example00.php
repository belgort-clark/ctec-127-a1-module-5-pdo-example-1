<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pdoposts';

// DSN - Data Source Name
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create a PDO Instance
$pdo = new PDO($dsn, $user, $password);
// Set PDO default data type to be returned
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// // PDO Query
// $stmt = $pdo->query('SELECT * FROM posts');

// // Fetching data as an associative array one database row at a time
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo $row["title"] . "<br>";
// }

// while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
//     echo $row->title . "<br>";
// }

// Using Prepared Statements (prepare and execute)
// UNSAFE WAY TO DO
// $sql = "SELECT * FROM posts WHERE author = '$author'";
// Prepared Statements separate the query instructions from the data

// Now lets fetch some data like we did above but now using Prepared Statements
// Fetch Multiple Posts
// Positional Parameters

// $author = "Bruce Elgort";
// $sql = "SELECT * FROM posts WHERE author = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $posts = $stmt->fetchAll();

// // var_dump($posts);

// foreach ($posts as $post) {
//     echo $post->title . "<br>";
// }

// Now lets fetch some data like we did above but now using Prepared Statements
// Fetch Multiple Posts
// Named Parameters

$author = "Bruce Elgort";
$is_published = true;
$id = 1;


// $sql = "SELECT * FROM posts WHERE author = :author && is_published = :is_published";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["author" => $author, "is_published" => $is_published]);
// $posts = $stmt->fetchAll();

// var_dump($posts);

// foreach ($posts as $post) {
//     echo $post->title . "<br>";
//     echo $post->body . "<br>";
//     echo $post->author . "<br>";
// }

// Getting a single post using Fetch
// =================================
// $sql = "SELECT * FROM posts WHERE :id=:id";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["id" => $id]);
// $post = $stmt->fetch();

// echo $post->title;

// How to get the row count of a table
// ====================================
// $stmt = $pdo->prepare("SELECT * FROM posts WHERE author = ?");
// $stmt->execute([$author]);
// $postCount = $stmt->rowCount();

// echo "Post Count is $postCount";
