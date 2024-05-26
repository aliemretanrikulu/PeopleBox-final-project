<?php 

    include "ayar.php";

    $querry = "SELECT * FROM shop";

    $result = mysqli_query($connect,$querry);

    while($row = mysqli_fetch_row($result)){
        echo $row[0]." ".$row[1];
    }

    echo "<hr>";

    mysqli_close($connect);



?>