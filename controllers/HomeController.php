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
        $tbltenbang = "baiviet INNER JOIN tacgia
        ON tacgia.ma_tgia = baiviet.ma_tgia
        INNER JOIN theloai
        ON baiviet.ma_tloai = theloai.ma_tloai
        ";
        $data = $db->getAllData($tbltenbang);   

        require_once('views/home/detail.php');
        break;
    }
 }
?>
