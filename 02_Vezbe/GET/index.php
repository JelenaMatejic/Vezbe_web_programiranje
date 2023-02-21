<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prikaz.php" method="GET">
        <p>
            <label for="">Ime i prezime: </label>
            <input type="text" name="ime_prezime" id="">
        </p>
        <p>
            <label for="">Godine:</label>
            <input type="number" name="god" id="">
        </p>
        <p>
            <label for="">Pol:</label>
            <input type="radio" name="pol" id="" value="n" checked>Neopredeljen
            <input type="radio" name="pol" id="" value="z">Ženski
            <input type="radio" name="pol" id="" value="m">Muški
        </p>
        <p>
            <input type="submit" value="Pošalji">
        </p>
    </form>
</body>
</html>