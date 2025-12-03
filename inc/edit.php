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
    <input type="text" name="nama" value="<?=$data

