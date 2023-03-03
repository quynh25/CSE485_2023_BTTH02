<?php

if(isset($_GET['action'])){
     $action = $_GET['action'];
 }
 else{
     $action = '';
 }

// $thanhcong = array();

 switch($action){
     case 'trangchu':{   
         $tbltenbang = "baiviet";
         $data = $db->getAllData($tbltenbang); 
         require_once('views/home/index.php');
         break;
     }
     case 'detail':{
        $ma_bviet = $_GET['ma_bviet'];
        $tbltenbang = "baiviet INNER JOIN tacgia
        ON tacgia.ma_tgia = baiviet.ma_tgia
        INNER JOIN theloai
        ON baiviet.ma_tloai = theloai.ma_tloai
        where ma_bviet = $ma_bviet ";
        $data = $db->getAllData($tbltenbang);   

        require_once('views/home/detail.php');
        break;
    }
    case 'login':{
        
        if($_POST){
            $user_name = $_POST['uname'];
            $pass= $_POST['password'];
            $tbltenbang = "users where tendn = '$user_name' and matkhau = '$pass'";
            $data = $db->getAllData($tbltenbang); 
            if($data){
              header("Location: index.php?controller=home&action=admin");

            }else{
              echo '<p style = "color: red">Tên đăng nhập hoặc mật khẩu không đúng!</p>';
                
            }
        }
        require_once('views/home/login.php');
        break;
    }
    case 'admin':{
        $tblusers = "users";
        $count_users = $db->getCount($tblusers); 

        $tbltheloai = "theloai";
        $count_theloai = $db->getCount($tbltheloai); 

        $tbltacgia = "tacgia";
        $count_tacgia = $db->getCount($tbltacgia);
        
        $tblbaiviet = "baiviet";
        $count_baiviet = $db->getCount($tblbaiviet); 

        require_once('views/admin/index.php');
        break;
    }
 }
?>
