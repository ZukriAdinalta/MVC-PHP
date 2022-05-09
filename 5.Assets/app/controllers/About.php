<?php

class About extends Controller{
  public function index($nama = 'Zukri Adinalta', $pekerjaan = 'Guru'){
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['judul'] = "About"; 
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
  }

  public function page(){
    $data['judul'] = "Page"; 
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/header');
  }
}