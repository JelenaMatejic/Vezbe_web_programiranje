<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz podataka</title>
</head>
<body>
    <h3>Ime i prezime: <?php echo $_POST["ime_prezime"]; ?></h3>
    <h4>Godine: <?php echo $_POST["god"]; ?></h4>
    <h4>Pol: 
        <?php
            $pol = $_POST["pol"];
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
    <h5>
        Programski jezici:
        <ul>
            <?php
                if(isset($_POST["jezik"])) {
                    $jezici_niz = $_POST["jezik"]; // Vraća niz čekiranih jezika
                    foreach($jezici_niz as $jz) {
                        echo "<li>$jz</li>";
                    }
                }
            ?>
        </ul>
    </h5>
</body>
</html>