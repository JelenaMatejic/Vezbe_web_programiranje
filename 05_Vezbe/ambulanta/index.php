<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Početna</title>
    <style>
        a {
            text-decoration: none;
            border: 1px solid purple;
            border-radius: 5px;
            padding: 5px;
            background-color: purple;
            color: white;
        }
    </style>
</head>
<body>
    <a href="sortiranje_pacijenata.php">Sortiranje pacijenata</a>
    <a href="pacijenti_1970_1990.php">Pacijenti rođeni između 1970. i 1990.</a>
    <a href="natprosecno_teski.php">Natprosečno teški pacijenti</a>
    <a href="maloletni.php">Maloletni</a>
    <a href="bmi.php">Nezdrav BMI</a>
</body>
</html>

<?php
    require_once "create_table.php";
