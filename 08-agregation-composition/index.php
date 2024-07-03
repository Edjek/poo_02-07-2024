<?php

require_once './Database.php';

$conn = new Database();
$conn->dbConnect();
$pdo = $conn->getPdo();

// CREER une classe DatabaseAgregation
    // propriété $pdo type PDO
    // constructeur qui prend en parametre un objet PDO
        // initialise la proporiété $pdo grace au parametre
