<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$servername = 'localhost';
$username = 'root';
$pass = '';
$db = 'adresar';

$conn = new mysqli($servername, $username, $pass, $db);
if($conn->connect_error) {
    die("Greška prilikom konekcije na bazu podataka " . $conn->connect_error);
}
{
    // Unos u tabelu imenik
    if(isset($_POST['ime']) && isset($_POST['telefon'])) {
        $ime = $_POST['ime'];
        $telefon = $_POST['telefon'];
        $q = "INSERT INTO `imenik`(`ime`, `telefon`) 
            VALUES ('$ime','$telefon')";
        $conn->query($q);
    }

    // Selektovanje podataka iz tabele imenik
    $q = "SELECT DISTINCT LEFT(`ime`, 1) AS `korisnik`
        FROM `imenik`
        ORDER BY `ime` ASC;";
    $res = $conn->query($q);

    // Ispis prvih slova u neuređenoj listi
    echo "<ul>";
    while($row = $res->fetch_assoc()) {
        $prvo_slovo = $row['korisnik'];
        echo "<li><a href='#$prvo_slovo'>$prvo_slovo</a></li>";
    }
    echo "</ul>";

    // Za svako slovo napraviti posebnu tabelicu
    $res = $conn->query($q);
    if($res->num_rows > 0) {
        // Iteriranje po selektovanim prvim slovima
        foreach($res as $row) {
            $prvo_slovo = $row['korisnik'];
            $q1 = "SELECT ime, telefon 
                    FROM imenik
                    WHERE ime LIKE '$prvo_slovo%'
                    ORDER BY ime;";
            $res1 = $conn->query($q1);

            echo "<table border='1' id='$prvo_slovo'>
            <tr>
                <th>Ime</th>
                <th>Telefon</th>
            </tr>
            ";
            foreach($res1 as $r) {
                echo "<tr>
                    <td>$r[ime]</td>
                    <td>$r[telefon]</td>
                </tr>";
            }

            echo "</table>";
        }
    }
}


?>