<?php

class About{
  public function index($nama = 'Zukri Adinalta', $pekerjaan = 'Guru'){
    echo "Hello $nama, saya bekerja sebagai $pekerjaan";
  }

  public function page(){
    echo 'about/page';
  }
}