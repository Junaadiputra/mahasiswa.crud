<?php 
require_once "database.php" ;
require_once "mahasiswa.php";

class MahasiswaControler {
    private $db;
    private $mahasiswa ;

    public function __construct()
    {
        $database= new Database();
        $this->db= $database->connect();

        $this->mahasiswa = new Mahasiswa($this->db);
    }

    public function index ()
    {
        return $this->mahasiswa->getAll();
    }
    public function store($data, $file)
    {
        $namaFile = null;

        if (!empty($file["name"])) {
            $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
            $namaFile = time().".". $ext;
            move_uploaded_file($file["tmp_name"], "../uploads/" . $namaFile); 
        }
        $this->mahasiswa->nama=$data["nama"];
        $this->mahasiswa->nim= $data["nim"];
        $this->mahasiswa->prodi=$data["prodi"];
        $this->mahasiswa->angkatan=$data["angkatan"];
        $this->mahasiswa->status=$data["status"];
        $this->mahasiswa->foto =$namaFile;

        return $this->mahasiswa->create();

    }
        public function edit ($id)
        {
            return $this->mahasiswa->find($id);
        }
    
    public function update ($id, $data, $file) 
    {
        $old = $this->mahasiswa->find($id);

        if (!empty ($file["name"])) {
            $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
            $namaFile = time(). ".".$ext;

            move_uploaded_file($file["tmp_name"],"../uploads/" .$namaFile) ;
        } else {
            $namaFile =$old["foto"];
        }
        $this->mahasiswa->id = $id;
        $this->mahasiswa->nama=$data["nama"];
        $this->mahasiswa->nim=$data["nim"];
        $this->mahasiswa->prodi=$data["prodi"];
        $this->mahasiswa->angkatan=$data["angkatan"];
        $this->mahasiswa->status=$data["status"];
        $this->mahasiswa->foto=$namaFile;

        return $this->mahasiswa->update();
    }

    public function destroy($id)
    {
        return $this->mahasiswa->delete($id);
    }
   
}
