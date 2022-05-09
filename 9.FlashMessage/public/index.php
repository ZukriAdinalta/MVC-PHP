<?php
// memasng session 
if(!session_id()){
  session_start(); // kalau gak ada session jalan kan session start 
}
require_once '../app/init.php';



$app = new App();