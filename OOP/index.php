<?php

 class Araba{
    public $marka;
    public $model;
    public function __construct($marka, $model) {
        $this->$marka = $marka;
        $this->model = $model; }

    public function displayCarInfo() {
        echo "Marka: ".$this ->marka."".$this->model."";
 }
 }

 $araba1 = new Araba("Ford","Focus");


?>