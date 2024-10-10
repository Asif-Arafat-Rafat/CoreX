<?php
    // Database configuration
    $host = 'localhost'; // or your database host
    $dbname = 'corex'; // your database name
    $username = 'root'; // your database username
    $password = ''; // your database password

    // Create a new PDO instance
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }
?>   