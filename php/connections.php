<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $servername = "usyd1.czgixbvgrqdc.us-east-2.rds.amazonaws.com";
    $username = "admin";
    $password = "usydadmin";
    $databasename = "ssr_database";

    $connections = mysqli_connect($servername, $username, $password, $databasename);
    if ($connections-> connect_error) {
        die("Connection failed:". $conn-> connect_error);
        echo "Failed to connect to MySQL.";
    } 
?>
