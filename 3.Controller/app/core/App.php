<?php
 class App{
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];
  
   public function __construct()
   {
    $url = $this->parseUrl();
    // var_dump($url);

    //  controller
    if(file_exists('../app/controllers/' .$url[0]. '.php')){ // kita cek dulu apakah controller yang diminta user tersedia atau tidak (filenya) pada aplikasi kita dengan method file_exists()
      $this->controller = $url[0];
      unset($url[0]); // unset() untuk menghapus elemen controller pada array $url[0]
    }
    

    require_once  '../app/controllers/' . $this->controller .'.php' ; //
    $this->controller = new $this->controller; // instanisasi supaya kita bisa manggil methodnya

    //method
    if(isset($url[1])){
      if (method_exists($this->controller, $url[1])){ //method_exists() kita gunakan untuk mengecek apakah aplikasi itu memlilki method sesuai dengan data yang kita dapat dari url
        $this->method = $url[1]; 
        unset($url[1]);
      }
    }

    // params
    if(!empty($url)){
      $this->params = array_values($url);
      // untuk mengecek apakah di url yang ditulis oleh user itu mengandung data atau enggak karena bisa jadi user hanya mengirimkan controller dan method saja (Alternatif cara untuk mengecek data). Kalau misal ternyata url mengandung data, maka data tersebut dimasukkan ke variabel params dengan menggunakan method array_values()
    }

    // Menjalankan controller dan method, seta kirimkan params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);
    // Untuk menjalankan controller kita gunakan fungsi call_user_func_array() kemudian kita masukkan parameter berupa variabel-variabel yang sebelumnya sudah melewati proses validasi.
  
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