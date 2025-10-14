<?php
    $server = "";
    $user = "";
    $pass = "";
    $dbname ="";

    $connection = new mysqli($server, $user, $pass, $dbname);

    if ($connection->connect_error) { 
        die("Error conecting to db". $connection->connect_error);
    }