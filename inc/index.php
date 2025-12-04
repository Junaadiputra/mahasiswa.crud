<?php
require_once "../class/mahasiswaControler.php";

$controller = new MahasiswaControler();
$data = $controller->index ();
?>

<?php include "header.php" ; ?>

<?php include "header.php"; ?>

<h2>Data Mahasiswa </h2> 

<a href ="create.php" class="btn">+ Tambah Mahasiswa</a>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Angkatan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php while ($row=$data->fetch (PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td>

                <?php if ($row["foto"] != "") : ?>
                    <img src="../uploads/<?= $row["foto"] ?>" width="60">
                <?php else : ?>
                    -
                <?php endif; ?>
            </td>
            <td><?=$row['nama'] ?></td>
            <td><?=$row['nim'] ?></td>
            <td><?=$row['prodi'] ?></td>
            <td><?=$row['angkatan'] ?></td>
            <td><?=$row['status'] ?></td>
            <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" 
                       onclick="return confirm('Yakin ingin menghapus?')">
                       Delete
                    </a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include "footer.php"; ?>



                 
            
                        
                    
    
