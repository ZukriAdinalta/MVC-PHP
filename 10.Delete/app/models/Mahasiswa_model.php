<?php
class Mahasiswa_model{

  protected $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database; // memanggil class Database
  }

  public function getAllMahasiswa(){
    $this->db->query('SELECT * FROM '.$this->table); // menjalankan query di dtbase
    return $this->db->resultSet(); //menjalankan resultSet yang ada pada class database
  }

  public function getMahasiswaById($id){
    $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id' );
    $this->db->bind('id', $id);
    return $this->db->single();

  }

  public function tambahDataMahasiswa($data){
    $query = "INSERT INTO mahasiswa
              VALUES
              ('', :nama, :nim, :email, :jurusan)";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();

  }

  public function deleteDataMahasiswa($id){
    $query = "DELETE FROM mahasiswa WHERE id =:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
  }
}