<?php
class About extends Controller{
  public function index($nama = "zukri", $pekerjaan = "guru"){
    // mengisi data array
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['judul'] = "About";
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page(){
    $data['judul'] = "Page";
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}