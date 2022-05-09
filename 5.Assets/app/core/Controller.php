<?php

class Controller{

  //View
  public function view($view, $data =[]){ 

    require_once '../app/views/' . $view . ".php";
  }

  
  
}