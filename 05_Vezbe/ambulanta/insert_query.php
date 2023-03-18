<?php
    require_once "connection.php";

    $q = "INSERT INTO `pacijenti`(`id`, `ime`, `prezime`, `visina`, `tezina`, `god_rodj`) 
          VALUES 
          (1,'Ana','Antić',1.75,70.5,1999),
          (2,'Anica','Tasić',1.57,50,1975),
          (3,'Miroslav','Mikić',2.05,136,1975),
          (4,'Milan','Ivić',1.80,70.5,1950),
          (5,'Vanja','Andrić',1.50,63,2004);";

    $conn->query($q);
