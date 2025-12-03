<?php
require_once "../class/mahasiswaControler.php";

$controler=new MahasiswaControler();

if ($_SERVER["REWUEST_METHOD"]== "POST") {
    $controller->store($_POST, $_FILES["FOTO"]);
    header("location :index.php");
    exit;
}
?>

<?php include "header.php;" ?>
<h2>Tambah Data Mahasiswa</h2>

<form action= "" method="POST" enctype="multipart/form-data">
    <label>Nama: </label>
    <input type= "text" name="name" required><br><br>

    <label>NIM: </label>
    <input type="text" name="nim" required><br><br>

    <label>prodi; </label>
    <input type ="text"name="prodi" required><br><br>

    <label>Angkatan: </label>
    <input type ="text"name="Angkatan"required><br><br>

    <label>status: </label>
    <input type= "text"name="status"required><br><br>

    <label>Foto:</label>
    <input type= "text"name="foto" required><br><br>

    <label>submit: </label>
    <input type= "text"name="submit"required><br><br>


