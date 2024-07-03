<?php

require_once './DatabaseAgregation.php';

$conn = new Database();
$conn->dbConnect();
$pdo = $conn->getPdo();

// CREER une classe DatabaseAgregation
    // propriété $pdo type PDO
    // constructeur qui prend en parametre un objet PDO
        // initialise la proporiété $pdo grace au parametre


        $z = new PDO('mysql:host=localhost;dbname=library_db', 'root', '', [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);

        $conn = new DatabaseAgregation($z);
        $conn->getPdo();