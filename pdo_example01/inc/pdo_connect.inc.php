<?php # pdo_connect.inc.php

# Create a new connection to the database
$host = '';
$user = '';
$password = '';
$dbname = '';

// DSN - Data Source Name
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create a PDO Instance
$pdo = new PDO($dsn, $user, $password);
// Set PDO default data type to be returned
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
