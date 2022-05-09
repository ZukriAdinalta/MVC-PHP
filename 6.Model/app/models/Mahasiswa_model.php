<?php
class Mahasiswa_model{

  private $dbh; // database handler
  private $stmt;

public function __construct()
{
  // data source name
  $dsn = 'mysql:host=localhost;dbname=phpdasar';
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

/* cara manual properti mahasiswa
private $mahasiswa = 
  
  
  [
    [
      "nama" => "Zukri Adinalta", 
      "nim" => "11353104167", 
      "jurusan" => "Sistem Informasi", 
      "email" =>  "Kumabbj@gmail.com"
    ],
    [
      "nama" => "Desnando", 
      "nim" => "11353104253", 
      "jurusan" => "Sistem Informasi", 
      "email" =>  "Desnando@gmail.com"
    ],
    [
      "nama" => "Siti Romlah", 
      "nim" => "11353104356", 
      "jurusan" => "Sistem Informasi", 
      "email" =>  "siti_romlah@gmail.com"
    ],
];

public function getAllMahasiswa(){
  return $this->mahasiswa;
}
*/