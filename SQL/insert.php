<?php 

include "ayar.php";

$querry = "INSERT INTO shop(title, description, image, url, isActive) VALUES ('Film 4', 'Film 4 açıklaması', '3.jpeg', 'film4', 1)";
$querry .= "INSERT INTO shop(title, description, image, url, isActive) VALUES ('Film 4', 'Film 5 açıklaması', '3.jpeg', 'film4', 1)";
$querry .= "INSERT INTO shop(title, description, image, url, isActive) VALUES ('Film 4', 'Film 6 açıklaması', '3.jpeg', 'film4', 1)";

$sonuc = mysqli_multi_query($connect, $querry);

if ($sonuc) {
    echo "Kayıt Eklendi";
} else {
    echo "Kayıt eklenemedi";
}


?>