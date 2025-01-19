<?php
// File: db.php

$host = 'dpg-cu6c60aj1k6c73f60lh0-a.oregon-postgres.render.com';
$port = '5432';
$dbname = 'ristorantewow';
$user = 'poldo';
$password = 'q8DxSAeJmJlYxu2o3MR3SYSbACuWcFMW';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Errore di connessione al database: " . $e->getMessage());
}
?>
