<?php  
require_once "../class/mahasiswaControler,php";

$controler = new MahasiswaControler();

if (!isset($_GET["id"])) {
    echo : "ID tidak ditemukan!";
    exit;
}

$id = $_GET["id"];

$controler->destroy($ID);