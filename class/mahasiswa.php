<?php

class Mahasiswa {
    private $conn;
    public $id;         
    public $nim;        
    public $prodi;
    public $angkatan;
    public $status;
    public $foto;
    

    public function __construct($db)
    {
        $this->conn = $db;
    }
    
         public function getAll()
    {
                $query = "SELECT * FROM mahasiswa ORDER BY id DESC";
                $stmt = $this->conn->prepare($query);
                $stmt->execute();
                return $stmt;
    }

        public function create()
    {
        $query = "INSERT INTO mahasiswa (nama, nim, prodi, angkatan, status, foto)
                  VALUES (:nama, :nim, :prodi, :angkatan, :status, :foto)";
                  
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(":nama", $this->nama);
                $stmt->bindParam(":nim", $this->nim);
                $stmt->bindParam(":prodi", $this->prodi);
                $stmt->bindParam(":angkatan", $this->angkatan);
                $stmt->bindParam(":status", $this->status);
                $stmt->bindParam(":foto", $this->foto);

        return $stmt->execute();
    }

    public function find($id)
    {
            $query = "SELECT * FROM mahasiswa WHERE id = :id LIMIT 1";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function update()
    {
        $query = "UPDATE mahasiswa SET 
                    nama = :nama,
                    nim = :nim,
                    prodi = :prodi,
                    angkatan = :angkatan,
                    status = :status,
                    foto = :foto
                  WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":prodi", $this->prodi);
        $stmt->bindParam(":angkatan", $this->angkatan);
        $stmt->bindParam(":status", $this->status);
        $stmt->bindParam(":foto", $this->foto);
        $stmt->bindParam(":id", $this->id);

        return $stmt->execute();
    }

     public function delete($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);

        return $stmt->execute();
    }
    
}

