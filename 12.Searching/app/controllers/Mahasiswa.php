<?php

class Mahasiswa extends Controller{
  public function index(){
    $data['judul'] = "Data Mahasiswa";
    $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }

  public function detail($id){
    $data['judul'] = "Data Mahasiswa";
    $data['mahasiswa'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
    $this->view('templates/header', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('templates/footer');
  }

  public function tambah(){
    if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
      Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
      header('Location: '. BASEURL .'/mahasiswa');
      exit;
    }else{
      Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
      header('Location: '. BASEURL .'/mahasiswa');
      exit;
    }
  }

  public function delete($id){
    if($this->model('Mahasiswa_model')->deleteDataMahasiswa($id) > 0){
      Flasher::setFlash('Berhasil', 'Di Hapus', 'success');
      header('Location: '. BASEURL .'/mahasiswa');
      exit;
    }else{
      Flasher::setFlash('Gagal', 'Di Hapus', 'danger');
      header('Location: '. BASEURL .'/mahasiswa');
      exit;
    }
  }

  public function getedit(){
   echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id'])); //rubah menjadi json
  }

  public function edit(){
    if($this->model('Mahasiswa_model')->editDataMahasiswa($_POST) > 0){
      Flasher::setFlash('Berhasil', 'Di Edit', 'success');
      header('Location: '. BASEURL .'/mahasiswa');
      exit;
    }else{
      Flasher::setFlash('Gagal', 'Di Edit', 'danger');
      header('Location: '. BASEURL .'/mahasiswa');
      exit;
    }
  }

  public function cari(){
    $data['judul'] = "Data Mahasiswa";
    $data['mahasiswa'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
    
  }

}