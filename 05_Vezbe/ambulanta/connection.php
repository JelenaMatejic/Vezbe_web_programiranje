<?php
    $servername = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'ambulanta';

    $conn = new mysqli($servername, $username, $pass, $db);
    if($conn->connect_error) {
        die("Greška prilikom konekcije na bazu podataka " . $conn->connect_error);
    }