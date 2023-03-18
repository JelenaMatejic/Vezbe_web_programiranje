<?php
    require_once "connection.php";
    echo "<h3>Pacijenti sortirani po visini</h3>";
    $q = "SELECT * FROM pacijenti ORDER BY visina DESC;" ;
         $result = $conn->query($q);
         echo "<table border = 1> 
         <tr>
             <th>Ime</th>
             <th>Prezime</th>
             <th>Visina</th>
             <th>Tezina</th>
         </tr>";
        if($result->num_rows > 0) {
              
                while ($red = $result->fetch_assoc()) {
                echo "<tr>
                        <td>$red[ime] </td>
                        <td>$red[prezime] </td>
                        <td>$red[visina] </td> 
                        <td>$red[tezina] </td>
                    </tr>
                ";               
            }
        }
        echo "</table>";
    
    echo "<h3>Pacijenti sortirani opadajuće po težini</h3>";
    $q = "SELECT * FROM pacijenti ORDER BY tezina DESC;" ;
        $result = $conn->query($q);
        echo "<table border = 1> 
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Visina</th>
            <th>Tezina</th>
        </tr>";
       if($result->num_rows > 0) {
             
               while ($red = $result->fetch_assoc()) {
               echo "<tr>
                       <td>$red[ime] </td>
                       <td>$red[prezime] </td>
                       <td>$red[visina] </td> 
                       <td>$red[tezina] </td>
                   </tr>
               ";               
           }
       }
       echo "</table>";
    
    echo "<h3>Pacijenti sortirani po godini rođenja</h3>";
    $q = "SELECT * FROM pacijenti ORDER BY god_rodj ASC;" ;
    $result = $conn->query($q);
    echo "<table border = 1> 
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Visina</th>
        <th>Tezina</th>
        <th>Godina rodjenja</th>
    </tr>";
    if($result->num_rows > 0) {
         
           while ($red = $result->fetch_assoc()) {
           echo "<tr>
                   <td>$red[ime] </td>
                   <td>$red[prezime] </td>
                   <td>$red[visina] </td> 
                   <td>$red[tezina] </td>
                   <td>$red[god_rodj] </td>
               </tr>
           ";               
       }
    }
    echo "</table>";
    echo "<a href='index.php'>Nazad na početnu</a>";