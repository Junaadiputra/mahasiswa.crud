<?php

class mahasiswa {
    private $conn;
    private $id;
    private $nama;
    private $prodi;
    private $angkatan;
    private $status;
    private $foto;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    
    public function getAll()
    
}

