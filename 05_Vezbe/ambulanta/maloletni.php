<?php
    require_once "connection.php";

    $q = "SELECT * FROM pacijenti WHERE (YEAR(NOW()) - god_rodj) < 18;" ;
         $result = $conn->query($q);

         echo "<table border = 1> 
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