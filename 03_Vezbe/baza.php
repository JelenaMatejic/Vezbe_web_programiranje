<?php
    echo "Hello!";

    // Kreiranje objekta konekcije
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "moja_baza";

    $conn = new mysqli($servername, $username, $password, $db);

    if($conn->connect_error) {
        // Neuspešna konekcija
        die("Greška prilikom konekcije na bazu " . $conn->connect_error);
    } 
    else {
        // Uspešna konekcija
        echo "<p>Uspešno ste se konektovali na bazu " . $db . "</p>";
        
        // Upit
        $q = "CREATE TABLE IF NOT EXISTS studenti(
            indeks INT UNSIGNED,
            ime VARCHAR(50) NOT NULL,
            prezime VARCHAR(150) NOT NULL,
            PRIMARY KEY(indeks));";

        // Izvršenje upita
        $conn->query($q);
        // Ukoliko vas zanima šta vraća izvršenje upita
        var_dump($conn->query($q));

        $q = "CREATE TABLE IF NOT EXISTS pacijenti(
            id INT UNSIGNED,
            ime VARCHAR(50) NOT NULL,
            prezime VARCHAR(50) NOT NULL,
            god_rodj INT UNSIGNED NOT NULL,
            visina FLOAT UNSIGNED NOT NULL,
            tezina SMALLINT UNSIGNED NOT NULL,
            PRIMARY KEY(id)
        );";
        $conn->query($q);

        // $q = "INSERT INTO `pacijenti`(`id`, `ime`, `prezime`, `god_rodj`, `visina`, `tezina`) 
        // VALUES (1, 'Nikola', 'Jokić', 1995, 2.11, 129)";  
        // $q = "INSERT INTO `pacijenti`(`id`, `ime`, `prezime`, `god_rodj`, `visina`, `tezina`) 
        // VALUES (2, 'Novak', 'Đoković', 1987, 1.88, 77)";  

        // $result = $conn->query($q);
        // if($result) {
        //     echo "<p>Uspešno unet pacijent</p>";
        // }
        // else {
        //     echo "Došlo je do greške" . $conn->error;
        // }

        // $q = "
        // INSERT INTO `pacijenti`(`id`, `ime`, `prezime`, `god_rodj`, `visina`, `tezina`) 
        // VALUES (3, 'Novak', 'Đoković', 1987, 1.88, 77);
        // INSERT INTO `pacijenti`(`id`, `ime`, `prezime`, `god_rodj`, `visina`, `tezina`) 
        // VALUES (4, 'Novak', 'Đoković', 1987, 1.88, 77);
        // ";
        
        // $res = $conn->multi_query($q);
        // if($res) {
        //     echo "<p>Upiti su uspešno izvršeni</p>";
        // }
        // else {
        //     echo "Došlo je do greške" . $conn->error;
        // }

        // $q = "ALTER TABLE `pacijenti`
        // ADD `mesto` VARCHAR(255)
        // AFTER `tezina`;";
        // $conn->query($q);
        // var_dump($conn->query($q));

        $q = "SELECT * FROM `pacijenti`;";
        $res = $conn->query($q); // Vraća objekat kao tabelu 
        // Jedan red tabele je jedina pacjent
        echo "<ul>";
        while($row = $res->fetch_assoc()) {
            echo "<li> $row[id] $row[ime] $row[prezime]</li>"; // Vraća vrednost id-a u selektovanom redu
        }
        echo "</ul>";

        $res = $conn->query($q);
        echo "<table border='1px'>";
        echo "<tr>
                <th>id</th>
                <th>ime</th>
                <th>prezime</th>
            </tr>";
            while($row = $res->fetch_assoc()) {
                echo "<tr> 
                    <td>$row[id]</td>
                    <td>$row[ime]</td>
                    <td>$row[prezime]</td>
                    </tr>"; 
            }
        echo "</table>";


    }


?>
