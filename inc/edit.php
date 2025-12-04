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
?>

<?php include "heade.php"; ?>
<h2>Edit Data Mahasiswa</2>

<form action="" method="POST" enctype="multipart/form-data">

    <label>Nama:</type>
    <input type= "text" name="nama"value="<?= $data\['nama']?>" required><br><br>

    <label>NIM:</type>
    <input type= "text" name="Nim"value="<?= $data\['nim']?>" required><br><br>

    <label>Prodi:</type>
    <input type= "text" name="Prodi" value="<?=$data\['prodi']?>" required><br><br>

    <label>Angkatan:</label>
    <input type="text" name="Angkatan" value="<?=$data\['angkatan']?>" required><br><br>

    <label>Status:</label>
    <input type= "text" name="Angkattan" value="<?=$data\['status']?>" required><br><br>

    <label>Foto Lama:</label><br>
    <?php if ($data\["foto"] !=""): ?>
        <img src="../uploads/<?=$data\['foto'] ?>" width="80"><br><br>
    <?php else: ?>
        Tidak ada foto<br><br>
    <?php endif ; ?>

    <label>Ganti Foto baru: </label>
    <inpput type="file" name="foto"><br><br>

    <button type = "submit">Update</button>
    <a href="index.php">Kembali</a>

    </form>
    



