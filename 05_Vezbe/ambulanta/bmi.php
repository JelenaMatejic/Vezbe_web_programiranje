<?php
    require_once "connection.php";

    $q = "SELECT *, ROUND(tezina/POWER(visina, 2), 3) AS `BMI`
          FROM pacijenti
          HAVING `BMI`<18.5 OR `BMI`>30;";

    $result = $conn->query($q);

    echo "<table border=1 cellspacing=0> 
        <tr>
            <th>Id</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Visina</th>
            <th>Tezina</th>
            <th>BMI</th>
        </tr>";

        while ($red = $result->fetch_assoc()) {
            echo "<tr>
                    <td>$red[id] </td>
                    <td>$red[ime] </td>
                    <td>$red[prezime] </td>
                    <td>$red[visina] </td> 
                    <td>$red[tezina] </td>
                    <td>$red[BMI] </td>
                </tr>
            ";               
        }
    echo "</table>";

    echo "<a href='index.php'>Nazad na početnu</a>";