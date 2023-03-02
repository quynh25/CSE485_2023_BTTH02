<?php
if(isset($_GET['action'])){
     $action = $_GET['action'];
 }
 else{
     $action = '';
 }

$thanhcong = array();

 switch($action){
     case 'trangchu':{   
         $tbltenbang = "baiviet";
         $data = $db->getAllData($tbltenbang); 
         require_once('views/home/index.php');
         break;
     }
     case 'detail':{
          require_once('views/home/detail.php');
          break;
      }
 }
?>
