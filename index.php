<?php
// File: index.php

require 'connesione.php';

try {
    // Crea la tabella
    $createTableSQL = "
        CREATE TABLE IF NOT EXISTS test1 (
            id SERIAL PRIMARY KEY,
            giallo VARCHAR(30) NOT NULL
        );
    ";
    $pdo->exec($createTableSQL);
    echo "Tabella 'test1' creata con successo.<br>";

    // Inserisci un record
    $insertSQL = "INSERT INTO test1 (giallo) VALUES (:giallo)";
    $stmt = $pdo->prepare($insertSQL);
    $stmt->execute(['giallo' => 'esempio']);
    echo "Record inserito con successo.<br>";

    // Recupera i dati
    $selectSQL = "SELECT * FROM test1";
    $stmt = $pdo->query($selectSQL);
    $rows = $stmt->fetchAll();

    echo "Dati nella tabella 'test1':<br>";
    foreach ($rows as $row) {
        echo "ID: " . $row['id'] . " - Giallo: " . $row['giallo'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Errore durante l'esecuzione: " . $e->getMessage();
}
?>
