<?php
 class App{
   public function __construct()
   {
    $url = $this->parseUrl();
    var_dump($url);
   }
   public function parseUrl(){
     if(isset($_GET['url'])){
       $url = rtrim($_GET['url'], '/'); // rtrim($_GET['url'], '/') => menghilakan url "/" di akhir
       $url = filter_var($url, FILTER_SANITIZE_URL); // filter_var() => digunakan untuk memfilter url dari karakter — karakter asing yang memungkinkan website kita di=hack
       $url = explode('/', $url); // explode() untuk memecah string yang kita punya menjadi bagian-bagian dalam bentuk array, yang memecah menjadi controller, method, dan data
       return $url;
     }
   }
 }