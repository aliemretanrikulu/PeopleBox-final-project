<?php 

    include "ayar.php";

    $querry = "SELECT * FROM shop WHERE id>1";

    $result = mysqli_query($connect,$querry);

    while($row = mysqli_fetch_row($result)){
        echo $row["id"]." ".$row["description"];
    }

    mysqli_close($connect);
    


    ?>