<?php
require_once "../class/mahasiswaControler.php";

$controler = new MahasiswaControler();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $controler->store($_POST, $_FILES["foto"]);   // FIX
    header("Location: index.php");
    exit;
}
?>

<?php include "header.php"; ?>

<div class="container">

    <h2>Tambah Data Mahasiswa</h2>

    <form action="" method="POST" enctype="multipart/form-data">    

        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>NIM:</label>
        <input type="text" name="nim" required>

        <label>Prodi:</label>
        <input type="text" name="prodi" required>

        <label>Angkatan:</label>
        <input type="number" name="angkatan" required>

        <label>Status:</label>
        <input type="text" name="status" required>

        <label>Foto:</label>
        <input type="file" name="foto">

        <button type="submit" class="btn-primary" style="width:100%;">Simpan</button>

        <a href="index.php" 
           class="btn-secondary" 
           style="width:100%; display:block; text-align:center; margin-top:10px;">
            Kembali
        </a>

    </form>

</div>

<?php include "footer.php"; ?>
