<?php

// Connect to DB
$dsn = 'mysql:host=db;port=3306;dbname=sample';
$username = 'root';
$password = 'password';
$pdo = new PDO($dsn, $username, $password);

// Echo user table
$statement = $pdo->query('select * from users');
$statement->execute();
while ($row = $statement->fetch()) {
  echo '- id: ' . $row['id'] . ', name: ' . $row['name'] . PHP_EOL;
}

// Disconnect
$pdo = null;
