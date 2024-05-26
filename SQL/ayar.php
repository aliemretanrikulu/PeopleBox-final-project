<?php

$connect = mysqli_connect("localhost", "root", "", "e-ticaret-app");

mysqli_set_charset($connect,"UTF8");

if(mysqli_connect_errno() > 0){
    die("Hata: ". mysqli_connect_errno());
}


?>