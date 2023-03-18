<?php
    require_once "connection.php";

    $q = "SELECT AVG(tezina) AS `prosecna_tezina` FROM pacijenti;";
    $result = $conn->query($q);
    $row = $result->fetch_assoc();
    echo "<p>Prosečna težina pacijenata je: $row[prosecna_tezina]kg</p>";

    $q = "SELECT * 
          FROM `pacijenti`
          WHERE tezina > (SELECT AVG(tezina) FROM pacijenti);";
    
    $result = $conn->query($q);

    echo "<table border=1 cellspacing=0> 
         <tr>
             <th>Id</th>
             <th>Ime</th>
             <th>Prezime</th>
             <th>Visina</th>
             <th>Tezina</th>
             <th>Godina rodjenja</th>
         </tr>";

        while ($red = $result->fetch_assoc()) {
            echo "<tr>
                    <td>$red[id] </td>
                    <td>$red[ime] </td>
                    <td>$red[prezime] </td>
                    <td>$red[visina] </td> 
                    <td>$red[tezina] </td>
                    <td>$red[god_rodj] </td>
                </tr>
            ";               
        }
    echo "</table>";
    echo "<a href='index.php'>Nazad na početnu</a>";