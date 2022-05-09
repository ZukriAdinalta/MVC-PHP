<?php

class Home extends Controller{
  public function index(){
    $data['judul'] = "Home";
    $data['nama'] = $this->model('User_model')->getUser();
    $this->view('templates/header', $data); // mengirim $data['judul'] = "Home" ke templates/header
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }
}