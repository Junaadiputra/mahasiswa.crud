<?php
require_once "../class/mahasiswaControler.php";

$controler=new MahasiswaControler();

if ($_SERVER["REWUEST_METHOD"]== "POST") {
    $controller->store($_POST, $_FILES["FOTO"]);
    header("location : index.php")
}