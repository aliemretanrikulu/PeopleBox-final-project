<?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "e-ticaret-app";

    $connection = mysqli_connect($server, $username, $password, $database);
    mysqli_set_charset($connection,"UTF8");
    mysqli_select_db($connection, $database);

    



?> 