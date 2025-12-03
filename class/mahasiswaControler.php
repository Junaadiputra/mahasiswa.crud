<?php 
require_once "database.php" ;
require_once "mahasiswa.php";

class MahasiswaController {
    private $db;
    private $mahasisw ;

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
        $nameFIle = null;

        if (!empty($file["name"])) {
            $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
            $nameFIle = time().".". $ext;
            move_uploaded($file["tmp_name"], "../uploads/" . $nameFile); 
        }
        $this->mahasiswa->nama=$data["nama"];
        $this->mahasiswa->nim= $data["nim"];
        $this->mahasiswa->prodi=$data["prodi"];
        $this->mahasiswa->angkatan=$data["angkatan"];
        $this->mahasiswa->status=$data["status"];
        $this->mahasiswa->foto=$data["foto"];

        return $this->mahasiswa->create();

    }
        public function edit ($id)
        {
            return $this->mahasiswa->find($id)
        }
    
    public function upadate ($id, $data, $file) 
    {
        $old = $this->mahasiswa->find($id);

        if (!empty ($file["name"])) {
            $ext = pathinfo($file["name"], PATHINFO_ETENSION);
            $namaFile = time(). ".".$ext;

            move_uploaded_file($file["name"],"../uploads" .$nameFile) ;
        } else {
            $nameFile =$sold["foto"];
        }
        $this->mahasiswa->id = $id;
        $this->mahasiswa->nama=$data["nama"];
        $this->mahasiswa->nim=$data["nim"];
        $this->mahasiswa->prodi=$data["prodi"];
        $this->mahasiswa->angkatan=$data["angkatan"];
        $this->mahasiswa->status=$data["status"];
        $this->mahasiswa->foto=$data["foto"];

        return $this->mahasiswa->update();
    }

    public function destory($id)
    {
        return $this->mahasiswa->delete($id);
    }
   
}
