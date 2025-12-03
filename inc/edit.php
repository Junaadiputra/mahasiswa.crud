<?php
require_once "../class/mahasiswaControler.php";

$controler = new MahasiswaControler();
$id = $GET["id"];
$data = $controler->edit($edit) ;

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}

if ($_SERVER["REQUEST_METHOD"]=== "POST") {
    $controller->update($id, $POST, $_FILES{"foto"});
    header("Location: index.php") ;
    exit;
}