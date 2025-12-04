<?php
require_once "../class/mahasiswaControler.php";

$controler = new MahasiswaControler();
$id = $_GET["id"];
$data = $controler->edit($id) ;

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}

if ($_SERVER["REQUEST_METHOD"]=== "POST") {
    $controler->update($id, $_POST, $_FILES["foto"]);
    header("Location: index.php") ;
    exit;
}
?>

<?php include "header.php"; ?>
<h2>Edit Data Mahasiswa</h2>

<form action="" method="POST" enctype="multipart/form-data">

    <label>Nama:</label>
    <input type= "text" name="nama"value="<?= $data['nama']?>" required><br><br>

    <label>NIM:</label>
    <input type= "text" name="nim"value="<?= $data['nim']?>" required><br><br>

    <label>Prodi:</label>
    <input type= "text" name="prodi" value="<?=$data['prodi']?>" required><br><br>

    <label>Angkatan:</label>
    <input type="text" name="angkatan" value="<?=$data['angkatan']?>" required><br><br>

    <label>Status:</label>
    <input type= "text" name="status" value="<?=$data['status']?>" required><br><br>

    <label>Foto Lama:</label><br>
   <?php if ($data["foto"] != ""): ?>
        <img src="../uploads/<?=$data['foto'] ?>" width="80"><br><br>
    <?php else: ?>
        Tidak ada foto<br><br>
    <?php endif ; ?>

    <label>Ganti Foto baru: </label>
    <input type="file" name="foto"><br><br>

    <button type = "submit">Update</button>
    <a href="index.php">Kembali</a>

 </form>
    



