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

  public function editDataMahasiswa($data){
    $query = "UPDATE mahasiswa set
              nama = :nama,
              nim = :nim,
              email = :email,
              jurusan = :jurusan
              WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function cariDataMahasiswa(){
    $keyword = $_POST['keyword'];
    $query = " SELECT * FROM mahasiswa 
            WHERE
            nama LIKE :keyword OR 
            nim LIKE :keyword OR
            jurusan LIKE :keyword 
            ";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
    
  }
}