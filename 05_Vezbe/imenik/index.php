<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unos novog broja</title>
</head>
<body>
    <form action="imenik.php" method="post">
        <p>
            <label>Ime:</label>
            <input type="text" name="ime" id="">
        </p>

        <p>
            <label>Telefon:</label>
            <input type="text" name="telefon" id="">
        </p>

        <p>
            <input type="submit" value="Pošalji">
        </p>
    </form>
</body>
</html>

<?php
    require_once "konekcija.php";
    
    $q = "CREATE TABLE IF NOT EXISTS imenik(
        id INT NOT NULL AUTO_INCREMENT,
        ime VARCHAR(50) NOT NULL,
        telefon VARCHAR(25) NOT NULL,
        PRIMARY KEY(id)
    );";

    $conn->query($q);
?>