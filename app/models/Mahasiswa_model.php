<?php 

class Mahasiswa_model{
    private $mhs= [
        [
            "nama" => "Andi Hartanto",
            "nim" => "21703030145",
            "email" => "andi@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Andi Hartanto",
            "nim" => "21703030145",
            "email" => "andi@gmail.com",
            "jurusan" => "Teknik Informatika"
        ]
    ];

    public function getAllMahasiswa(){
        return $this->mhs;
    }
}

class Mahasiswa_model{
    private $dbh;
    private $stmt;

    public function __construct(){
        $dsn = 'mysqli:host=localhost;dbname=phpmvc';
        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    
    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->
    }
}

?>