<?php

include("db-baglantisi.php");

$querry = "UPDATE shop SET title= 'update.' description='update' WHERE id= 1 ";
$result = mysqli_query($connect, $querry);

if($result){
    echo "Veri güncellendi";
}else {
    echo "Kayıt güncelleme hatası";
}


mysqli_close($connect);

?>