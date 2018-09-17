<?php
    // Define the server and database details
    $host = "localhost";
    $user = "access";
    $password = "12345";
    $dbname = "sto";

    // Attempt to connect
    $link = mysqli_connect($host,$user,$password,$dbname)
        // If cannot connect, promt user
        or die("Couldn't connect to server.");
?>
