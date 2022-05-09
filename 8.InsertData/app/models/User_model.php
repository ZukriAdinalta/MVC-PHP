<?php
// Untuk menyimpan data user
class User_model{
  private $name = "Zukri Adinalta";

  public function getUser(){
    return $this->name;
  }
}