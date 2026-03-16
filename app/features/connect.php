<?php

$config = require 'config/database.php';

try {
    $pdo = new PDO("mysql:host={$config['host']};dbname={$config['name']};charset=utf8", $config['user'], $config['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "🎉 Connected to database successfully!";

} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}

?>