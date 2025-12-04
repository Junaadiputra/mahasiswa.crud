<?php
require_once "../class/mahasiswaControler.php";

$controler = new MahasiswaControler();
$id = $_GET["id"];
$data = $controler->edit($id);

if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $controler->update($id, $_POST, $_FILES["foto"]);
    header("Location: index.php");
    exit;
}
?>

<?php include "header.php"; ?>

<div class="container">

    <h2>Edit Data Mahasiswa</h2>

    <form action="" method="POST" enctype="multipart/form-data">

        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

        <label>NIM:</label>
        <input type="text" name="nim" value="<?= $data['nim'] ?>" required>

        <label>Prodi:</label>
        <input type="text" name="prodi" value="<?= $data['prodi'] ?>" required>

        <label>Angkatan:</label>
        <input type="number" name="angkatan" value="<?= $data['angkatan'] ?>" required>

        <label>Status:</label>
        <input type="text" name="status" value="<?= $data['status'] ?>" required>

        <label>Foto Lama:</label><br>
        <?php if ($data["foto"]): ?>
            <img src="../uploads/<?= $data['foto'] ?>" width="90" style="border-radius:8px; margin-bottom:10px;">
        <?php else: ?>
            Tidak ada foto
        <?php endif; ?>

        <label>Ganti Foto Baru:</label>
        <input type="file" name="foto">

        <button type="submit" class="btn-primary">Update</button>
        <a href="index.php" class="btn-secondary">Kembali</a>

    </form>

</div>

<?php include "footer.php"; ?>
