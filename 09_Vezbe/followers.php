<?php
    session_start();

    if(empty($_SESSION['id_loged'])) {
        header('Location:login.php');
    }

    echo $_SESSION['id_loged'];
    echo $_SESSION['username_loged'];

?>