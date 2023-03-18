<?php
    require_once "connection.php";

    $q = "CREATE TABLE IF NOT EXISTS pacijenti(
        id INT UNSIGNED,
        ime VARCHAR(50) NOT NULL,
        prezime VARCHAR(150) NOT NULL,
        visina FLOAT UNSIGNED NOT NULL,
        tezina FLOAT UNSIGNED NOT NULL,
        god_rodj INT NOT NULL, 
        PRIMARY KEY(id)
    )";

    $resultOfQuery = $conn->query($q);

    if($resultOfQuery) {
        echo "<p>Tabela pacijenti je uspesno dodata u bazu!</p>";
    } else {
        $err = $conn->error;
        echo "<p>Doslo je do greske prilikom kreiranja tabele pacijenti: $err</p>";
    }