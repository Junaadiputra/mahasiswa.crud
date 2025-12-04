<?php
require_once "../class/mahasiswaControler.php";

$controler=new MahasiswaControler();

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $controler->store($_POST, $_FILES["foto"]);
    header("location: index.php");
    exit;
}
?>

<?php include "header.php"; ?>
    <h2>Tambah Data Mahasiswa</h2>

    <form action="" method="POST" enctype="multipart/form-data">    

            <label>Nama:</label>
            <input type="text" name="nama" required><br><br>

            <label>NIM:</label>
            <input type="text" name="nim" required><br><br>

            <label>Prodi:</label>
            <input type="text" name="prodi" required><br><br>

            <label>Angkatan:</label>
            <input type="number" name="angkatan" required><br><br>

            <label>Status:</label>
            <input type="text" name="status" required><br><br>

            <label>Foto:</label>
            <input type="file" name="foto"><br><br>

            <button type="submit">Simpan</button>
            <a href="index.php">Kembali</a>

    </form>

<?php include "footer.php"; ?>




    



    



    


