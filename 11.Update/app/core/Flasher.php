<?php

// class flasser notifikasi ketika ada pesan gagal simpan edit dn delete
class Flasher{
  public static function setFlash($pesan, $aksi, $tipe){
    $_SESSION['flash'] = [
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    ];
  }

  public static function flash(){
    // alert simpan, edit dan delete
    if(isset($_SESSION['flash'])){
      echo '<div class="alert alert-' .$_SESSION['flash']['tipe']. ' alert-dismissible fade show" role="alert">
      Data Mahasiswa <strong>'.$_SESSION['flash']['pesan'].'</strong> '.$_SESSION['flash']['aksi'].'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';

    unset($_SESSION['flash']); // cuma menapilkan sekali jika halaman di refersh maka alert nya akan hilang
    }
  }
}