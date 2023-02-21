<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz podataka</title>
</head>
<body>
    <h3>Ime i prezime: <?php echo $_GET["ime_prezime"]; ?></h3>
    <h4>Godine: <?php echo $_GET["god"]; ?></h4>
    <h4>Pol: 
        <?php
            $pol = $_GET["pol"];
            switch($pol) {
                case "z":
                    echo "<span style='color:red;'>Ženski</span>";
                    break;
                case "m":
                    echo "<span style='color:blue;'>Muški</span>";
                    break;
                case "n":
                    echo "<span style='color:yellow;'>Neopredeljen</span>";
                    break;
            }
        ?>
    </h4>
</body>
</html>