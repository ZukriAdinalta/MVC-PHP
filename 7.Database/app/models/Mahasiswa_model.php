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
}