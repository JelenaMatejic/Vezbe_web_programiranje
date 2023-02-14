<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index stranica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    Hello world!
    <ul>
        <li>Prvi</li>
        <li>Drugi</li>
        <li>Treći</li>
        <li>Četvrti</li>
    </ul>

    <?php
        echo '<h1 id="naslov">Hello web programiranje</h1>';
        echo "<h2 style='color: blue;'>Vežbe 1</h2>";
        echo 
        "<ul>
            <li>Uvod</li>
            <li>Razrada</li>
            <li>Zaključak</li>
        </ul>";

        $x = 5;
        echo $x;
        var_dump($x);

        $str = "Zdravo!";
        var_dump($str);

        $god = 28;
        echo "<p>Imam $god godina</p>";
        echo '<p>Imam $god godina</p>';
        echo '<p>Imam ' . $god . ' godina</p>';

        if($god >= 18) {
            echo "<i>Osoba je punoletna</i>";
        } else {
            echo "<i>Osoba je maloletna</i>";
        }

        $pol = "o";
 
        if($pol == "m" || $pol == "M") {
            echo "<p id='musko'>
                    Musko sam <br>
                    <img src='slike/m.jpg'>
                </p>";
        }
        else {
            echo "<p id='zensko'>
                    Zensko sam <br>
                    <img src='slike/z.jpg'>
                </p>";
        }

        echo "<ul>";
        for($i=0; $i<$x; $i++) {
            echo "<li>$i</li>";
        } 
        echo "</ul>";

        $niz = ["POČETNA", "O NAMA", "KONTAKT", "VESTI"];
        echo $niz[2];

        // 1. Iterirati nizom i kao elemente uređene liste prikazati elemente niza
        // 2. Iterirati nizom i elemente poređati u prvi red tabele, 
        // tako da jedan element bude u jednoj ćeliji tabele.
        // Za dužinu niza koristiti count($niz) funkciju
        
        echo "<table border=1><tr>";
        foreach($niz as $elem) {
            echo "<td>$elem</td>";
        } 
        echo "</tr></table>";

        
    ?>
</body>
</html>