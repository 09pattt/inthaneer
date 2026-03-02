<?php

$host = "db";
$dbname = "athlete";
$dbusername = "root";
$dbpassword = "tuninthaneer";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "🎉 Connected to database successfully!";

} catch (PDOException $e) {
    // echo "❌ Connection failed: " . $e->getMessage();
}

?>