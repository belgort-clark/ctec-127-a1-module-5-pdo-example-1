<?php # pdo_connect.inc.php

# Create a new connection to the database
$host = 'ctec-127.cuqeqos1gudo.us-east-1.rds.amazonaws.com';
$user = 'belgort';
$password = 'XyNRKGta2bpxaexB';
$dbname = 'ctec';

// DSN - Data Source Name
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create a PDO Instance
$pdo = new PDO($dsn, $user, $password);
// Set PDO default data type to be returned
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
