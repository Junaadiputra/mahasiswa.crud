<?php
requiere_once "../ class /mahasiswaController.php"

$controller = new MahasiswaController();
$data = $controller->undex ();
$?

<?php include "header.php" ; ?>

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
    
