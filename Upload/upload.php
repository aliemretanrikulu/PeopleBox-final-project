<?php 

if(isset($_POST["btnUpload"]) && $_POST["btnUpload"]=="Upload"){
}

$fileTmpPath = $_FILES["fileToUpload"]["tmp_name"];
$fileName = $_FILES["fileToUpload"]["name"];

if(empty($fileName)){
    echo "dosya seçiniz";
}

$uploadFolder = './files/';
$dest_path = $uploadFolder.$fileName;

if(move_uploaded_file($fileTmpPath, $dest_path)){
    echo "dosya yüklendi";
}else{
        echo "hata";
    }

?>