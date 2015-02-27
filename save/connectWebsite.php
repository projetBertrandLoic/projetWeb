<?php
    $host_name  = "db567256138.db.1and1.com";
    $database   = "db567256138";
    $user_name  = "dbo567256138";
    $password   = "21Dec1978";

    $co = mysqli_connect($host_name, $user_name, $password, $database);
    if (mysqli_connect_errno())
    {
    echo "La connexion au serveur MySQL n'a pas abouti : " . mysqli_connect_error();
    }
?>