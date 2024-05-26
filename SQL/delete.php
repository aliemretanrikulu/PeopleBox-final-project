<?php 

include ("ayar.php");

$querry = "DELETE from shops WHERE id=1";

$result = mysqli_query($connect, $querry);

if($result){
    echo "Veri silindi";
}else{
    echo "Veri silinirken hata oluştu";
}


?>