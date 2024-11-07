<?php 

// class Mahasiswa_model{
//     private $mhs= [
//         [
//             "nama" => "Andi Hartanto",
//             "nim" => "21703030145",
//             "email" => "andi@gmail.com",
//             "jurusan" => "Teknik Informatika"
//         ],
//         [
//             "nama" => "Andi Hartanto",
//             "nim" => "21703030145",
//             "email" => "andi@gmail.com",
//             "jurusan" => "Teknik Informatika"
//         ]
//     ];

//     public function getAllMahasiswa(){
//         return $this->mhs;
//     }
// }

class Mahasiswa_model{
    private $dbh; #database handler
    private $stmt; #untuk query

    public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=phpmvc'; #data source name
        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    
    public function getAllMahasiswa(){
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}

?>